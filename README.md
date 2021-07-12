Emoji pattern
=============

This package provides regexp patterns to match Unicode emojis.

[![Total Downloads](https://poser.pugx.org/incenteev/emoji-pattern/downloads.svg)](https://packagist.org/packages/incenteev/emoji-pattern) [![Latest Stable Version](https://poser.pugx.org/incenteev/emoji-pattern/v/stable.svg)](https://packagist.org/packages/incenteev/emoji-pattern)

## Installation

Use [Composer](https://getcomposer.org) to install the library:

```bash
$ composer require incenteev/emoji-pattern
```

## Usage

```php
use Incenteev\EmojiPattern\EmojiPattern;

$singleEmojiRegexp = '/^' . EmojiPattern::getEmojiPattern() . '$/u';
$anyEmojiRegexp = '/' . EmojiPattern::getEmojiPattern() . '/u';
```

## License

This package is under the [MIT license](LICENSE).

## Reporting an issue or a feature request

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/Incenteev/emoji-pattern/issues).
