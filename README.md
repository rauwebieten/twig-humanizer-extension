# Twig Humanizer Extension

[![Maintainability](https://api.codeclimate.com/v1/badges/5143e3f5b20f57a3084d/maintainability)](https://codeclimate.com/github/rauwebieten/twig-humanizer-extension/maintainability)

A [Twig extension](https://github.com/twigphp/Twig)
for the [PHP Humanizer library](https://github.com/coduo/php-humanizer)

Use the humanizer functions from the coduo/php-humanizer library in your Twig templates.

## Installation

```
composer require rauwebieten/twig-humanizer-extension
```

## Available filters

- humanizer_humanize
- humanizer_truncate
- humanizer_truncate_html
- humanizer_ordinalize
- humanizer_ordinal
- humanizer_to_roman
- humanizer_from_roman
- humanizer_binary_suffix
- humanizer_precise_binary_suffix
- humanizer_metric_suffix
- humanizer_metric_suffix
- humanizer_oxford
- humanizer_difference
- humanizer_precise_difference

See the [PHP Humanizer documentation](https://github.com/coduo/php-humanizer) for details.

## Example usage

```twig
{% for i in 1..12 %}
    {{ i|to_roman }}
{% endfor %}
```