#!/usr/bin/env php
<?php

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\ResponseInterface;

require __DIR__ . '/../vendor/autoload.php';

$client = HttpClient::create();

/**
 * @var array<string, ResponseInterface> $responses
 */
$responses = [
    'emoji-data.txt' => $client->request('GET', 'https://www.unicode.org/Public/UCD/latest/ucd/emoji/emoji-data.txt'),
    'emoji-sequences.txt' => $client->request('GET', 'https://www.unicode.org/Public/emoji/latest/emoji-sequences.txt'),
    'emoji-zwj-sequences.txt' => $client->request('GET', 'https://www.unicode.org/Public/emoji/latest/emoji-zwj-sequences.txt'),
];

$emojis = parseFile($responses['emoji-data.txt']->getContent());
$patterns = array_filter($emojis, function (array $emoji): bool  { return $emoji['property'] === 'Emoji'; });
$presentationPatterns = array_filter($emojis, function (array $emoji): bool  { return $emoji['property'] === 'Emoji_Presentation'; });
$presentationPatternRegexps = array_column($presentationPatterns, 'pattern');
$nonPresentationPatterns = array_filter($patterns, function (array $emoji) use ($presentationPatternRegexps): bool {
    return !in_array($emoji['pattern'], $presentationPatternRegexps);
});

unset($emojis);

$sequencePatterns = parseFile($responses['emoji-sequences.txt']->getContent());
$zeroWidthJoinerSequencePatterns = parseFile($responses['emoji-zwj-sequences.txt']->getContent());

$emojiSequencesFinalUrl = $responses['emoji-sequences.txt']->getInfo('url');

assert(is_string($emojiSequencesFinalUrl));

if (!preg_match('#https://www\.unicode.org/Public/emoji/([^/]++)/emoji-sequences\.txt#', $emojiSequencesFinalUrl, $match)) {
    throw new RuntimeException('Cannot extract the Emoji version from the URL: '.$responses['emoji-sequences.txt']->getInfo('url'));
}

$emojiVersion = $match[1];

$patternLines = renderPatternLines($patterns);
$nonPresentationPatternLines = renderPatternLines($nonPresentationPatterns);
$presentationPatternLines = renderPatternLines($presentationPatterns);
$sequencePatternLines = renderPatternLines($sequencePatterns);
$zeroWidthJoinerSequencePatternLines = renderPatternLines($zeroWidthJoinerSequencePatterns);

$code = <<<PHP
<?php

namespace Incenteev\EmojiPattern;

/**
 * Pattern for matching emojis
 *
 * This file is generated from Unicode Emoji $emojiVersion.
 */
final class EmojiPattern
{
    /**
     * Patterns that match characters in the "Emoji" group but not in "Emoji Presentation" group.
     * Those are not rendered as Emoji by default. They must be followed by the U+FE0F (variant
     * selector) character to be rendered as Emoji.
     */
    private const EMOJI_NON_PRESENTATION_PATTERNS = [
        $nonPresentationPatternLines
    ];

    /**
     * Patterns that match characters in the "Emoji Presentation" group. These characters are
     * (rendered as Emoji by default, and do not need a variant selector, unlike `EMOJI_PATTERNS`.
     */
    private const EMOJI_PRESENTATION_PATTERNS = [
        $presentationPatternLines
    ];

    /**
     * Patterns that match emoji sequences. This includes keycap characters, flags, and skintone
     * variants, but not Zero-Width-Joiner (ZWJ) sequences used for "family" characters like "👨‍👩‍👧‍👧".
     */
    private const SEQUENCE_PATTERNS = [
        $sequencePatternLines
    ];

    /**
     * Patterns that match Zero-Width-Joiner (ZWJ) sequences used for "family" characters like "👨‍👩‍👧‍👧".
     */
    private const ZWJ_SEQUENCE_PATTERNS = [
        $zeroWidthJoinerSequencePatternLines
    ];

    private static string \$emojiPattern;

    /**
     * Get the pattern matching an emoji
     *
     * This is not a full regexp (it does not have delimiters) and so can be included
     * in a larger regexp. The returned pattern is wrapped in a non-capturing group to allow
     * using it safely when embedding it. The returned pattern does not contain any capturing
     * groups.
     *
     * The returned pattern is only suitable for usage with UTF-8. It requires the `u` modifier.
     */
    public static function getEmojiPattern(): string
    {
        if (isset(self::\$emojiPattern)) {
            return self::\$emojiPattern;
        }

        // The non-"Presentation" group needs to be followed by a special character to be rendered like emoji.
        \$emojiVariants = '(?:'.implode('|', self::EMOJI_NON_PRESENTATION_PATTERNS).')\x{FE0F}';

        // Emoji can be followed by optional combining marks. The standard
        // says only keycaps and backslash are likely to be supported.
        \$combiningMarks = '[\x{20E3}\x{20E0}]';

        // "Presentation" characters are rendered as emoji by default and need no variant.
        \$emojiPresentation = implode('|', self::EMOJI_PRESENTATION_PATTERNS);

        // Some other emoji are sequences of characters.
        \$zwjSequences = implode('|', self::ZWJ_SEQUENCE_PATTERNS);
        \$otherSequences = implode('|', self::SEQUENCE_PATTERNS);

        return self::\$emojiPattern = '(?:(?:'.\$zwjSequences.'|'.\$otherSequences.'|'.\$emojiVariants.'|'.\$emojiPresentation.')(?:'.\$combiningMarks.')?)';
    }
}

PHP;

file_put_contents(__DIR__ . '/../src/EmojiPattern.php', $code);


/**
 * @return list<array{pattern: string, property: string, comment: string, codepoints: string}>
 */
function parseFile(string $fileContent): array
{
    $emojis = [];

    foreach (explode("\n", $fileContent) as $line) {
        if (!preg_match('/^\s*([^#;]++)(?:;\s*+([^#]++))?#(.*)$/', $line, $match)) {
            continue;
        }

        $emojis[] = [
            'codepoints' => trim($match[1]),
            // Count the number of different codepoints involved in the sequence
            'length' => substr_count(trim($match[1]), ' ') + 1,
            'pattern' => buildPattern(trim($match[1])),
            'property' => trim($match[2]),
            'comment' => trim($match[3]),
        ];
    }

    // Sort longer sequences first, so that we get the longer match. The secondary sort by codepoints allows a deterministic code generation.
    usort($emojis, function (array $a, array $b) {
        return [$b['length'], $a['codepoints']] <=> [$a['length'], $b['codepoints']];
    });

    return $emojis;
}

function buildPattern(string $unicodeRange): string {
    $parts = preg_split('/\s+/', $unicodeRange);

    assert($parts !== false);

    $patternParts = [];

    foreach ($parts as $part) {
        if (preg_match('/^[a-f0-9]+$/i', $part)) {
            $patternParts[] = hexCodeToEscape($part);
            continue;
        }

        if (preg_match('/^([a-f0-9]++)\.\.([a-f0-9]++)$/i', $part, $match)) {
            $patternParts[] =  '['.hexCodeToEscape($match[1]).'-'.hexCodeToEscape($match[2]).']';
            continue;
        }

        throw new RuntimeException('Unknown line: ' . $unicodeRange);
    }

    return implode('', $patternParts);
}

function hexCodeToEscape(string $hex): string
{
    $length = mb_strlen($hex);

    if ($length !== 4 && $length !== 5) {
        throw new RuntimeException('Unknown hex code: '.$hex);
    }

    return '\x{'.$hex.'}';
}

/**
 * @param array{pattern: string, property: string, comment: string, codepoints: string} $emoji
 */
function renderArrayLine(array $emoji): string
{
    return var_export($emoji['pattern'], true) . ', // ' . $emoji['comment'];
}

/**
 * @param array<array{pattern: string, property: string, comment: string, codepoints: string}> $patterns
 */
function renderPatternLines(array $patterns): string
{
    return implode("\n        ", array_map('renderArrayLine', $patterns));
}
