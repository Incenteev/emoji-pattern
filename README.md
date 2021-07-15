Emoji pattern
=============

This package provides regexp patterns to match Unicode emojis. All forms of emojis are matched, including:

* Single-character emoji (👍)
* Emoji that are variants of other characters (e.g. ⌚️ instead of ⌚︎)
* Fitzpatrick Modifiers (e.g. skintones 👍🏻👍🏼👍🏽👍🏾👍🏿)
* ZWJ Sequences (e.g. 💑)
* Combining sequences and Combining Marks (e.g. 0️⃣)
* Flag sequences (e.g 🇨🇦)

All emojis are derived directly from the standard unicode data files, using an automated script.

[![Total Downloads](https://poser.pugx.org/incenteev/emoji-pattern/downloads.svg)](https://packagist.org/packages/incenteev/emoji-pattern) [![Latest Stable Version](https://poser.pugx.org/incenteev/emoji-pattern/v/stable.svg)](https://packagist.org/packages/incenteev/emoji-pattern)

## Installation

Use [Composer](https://getcomposer.org) to install the library:

```bash
$ composer require incenteev/emoji-pattern
```

## Usage

The provided pattern relies on the `u` modifier of PCRE and so works only for UTF-8 strings.

```php
use Incenteev\EmojiPattern\EmojiPattern;

$emojiRegexp = '/' . EmojiPattern::getEmojiPattern() . '/u';
```

## License

This package is under the [MIT license](LICENSE).

## Credits

The initial version of the package was a port of [SwiftEmoji](https://github.com/nerdyc/SwiftEmoji).

## Reporting an issue or a feature request

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/Incenteev/emoji-pattern/issues).
