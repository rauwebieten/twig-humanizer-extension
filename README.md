# Twig Humanizer Extension

A [Twig extension](https://github.com/twigphp/Twig)
for the [PHP Humanizer library](https://github.com/coduo/php-humanizer)

Use the humanizer functions from the coduo/php-humanizer library in your Twig templates.

## Installation

```
composer require rauwebieten/twig-humanizer-extension
```

## Available filters

humanize,
truncate,
truncate_html,
ordinalize,
ordinal,
to_roman,
from_roman,
binary_suffix,
precise_binary_suffix,
metric_suffix,
metric_suffix,
oxford,
difference,
precise_difference

See the [PHP Humanizer documentation](https://github.com/coduo/php-humanizer) for details.

## Example usage

```twig
{% for i in 1..12 %}
    {{ i|to_roman }}
{% endfor %}
```