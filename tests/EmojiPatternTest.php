<?php

namespace Incenteev\EmojiPattern\Tests;

use Incenteev\EmojiPattern\EmojiPattern;
use PHPUnit\Framework\TestCase;

class EmojiPatternTest extends TestCase
{
    /**
     * @dataProvider provideEmojis
     */
    public function testMatchEmoji(string $emoji)
    {
        $this->assertTrue(preg_match(self::getSingleEmojiRegexp(), $emoji) === 1);
        $this->assertEquals('x', preg_replace(self::getEmojiRegexp(), 'x', $emoji), 'Emojis must be matched without splitting them.');
    }

    public static function provideEmojis(): iterable
    {
        yield ['😀'];
        yield ['🪰'];
        yield ['0️⃣'];
        yield ['🇨🇵'];
        yield ['🦵🏿'];
        yield ['👫🏼'];
        yield ['🏳️‍🌈'];
        yield ['🐻‍❄️'];
        yield ['✊🏽'];
        yield ['✋🏾'];
        yield ['👨‍👧‍👦'];
        yield ['🥹'];
    }

    /**
     * @dataProvider provideNonEmojis
     */
    public function testDoesNotMatchNonEmoji(string $input)
    {
        $this->assertTrue(preg_match(self::getSingleEmojiRegexp(), $input) === 0);
    }

    public static function provideNonEmojis(): iterable
    {
        yield ['0'];
        yield ['1'];
        yield ['🐻❄']; // multiple emojis without the ZWJ
    }

    private static function getEmojiRegexp(): string
    {
        return '/' . EmojiPattern::getEmojiPattern() . '/u';
    }

    private static function getSingleEmojiRegexp(): string
    {
        return '/^' . EmojiPattern::getEmojiPattern() . '$/u';
    }
}
