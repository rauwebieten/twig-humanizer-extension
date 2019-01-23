# Twig Humanizer Extension

[![Build Status](https://travis-ci.org/rauwebieten/twig-humanizer-extension.svg?branch=master)](https://travis-ci.org/rauwebieten/twig-humanizer-extension)
[![Maintainability](https://api.codeclimate.com/v1/badges/5143e3f5b20f57a3084d/maintainability)](https://codeclimate.com/github/rauwebieten/twig-humanizer-extension/maintainability)
[![codecov](https://codecov.io/gh/rauwebieten/twig-humanizer-extension/branch/master/graph/badge.svg)](https://codecov.io/gh/rauwebieten/twig-humanizer-extension)
[![StyleCI](https://github.styleci.io/repos/165889067/shield?branch=master)](https://github.styleci.io/repos/165889067)
![](https://img.shields.io/github/issues/rauwebieten/twig-humanizer-extension.svg)
![](https://img.shields.io/github/license/rauwebieten/twig-humanizer-extension.svg)

A [Twig extension](https://github.com/twigphp/Twig)
for the [PHP Humanizer library](https://github.com/coduo/php-humanizer)

Use the humanizer functions from the coduo/php-humanizer library in your Twig templates.

## Installation

```
composer require rauwebieten/twig-humanizer-extension
```

## Available filters

All filters are underscored, and prefixed:

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

```twig,html
<p>
    1 to 12 in roman:
    {% for i in 1..12 %}
        {{ i|humanizer_to_roman }}
    {% endfor %}
</p>
<p>
    Roman VI = {{ 'VI'|humanizer_from_roman }}
</p>
<p>
    1024 bytes = {{ 1024|humanizer_binary_suffix }}<br>
    1024 bytes = {{ 1024|humanizer_precise_binary_suffix(2) }}
</p>
<p>
    This article was posted
    {{ date("now")|humanizer_difference(date("2014-04-24")) }}
</p>
<p>
    {{ ['Michal', 'Norbert', 'Lukasz', 'Pawel']|humanizer_oxford(2) }}
</p>
<p>
    1240 metric = {{ 1240|humanizer_metric_suffix }}
</p>
<p>
    first: 1{{ 1|humanizer_ordinal }}<br>
    first: {{ 1|humanizer_ordinalize }}
</p>
<p>
    {{ 'Lorem ipsum dolorem si amet, lorem ipsum. Dolorem sic et nunc.'|humanizer_truncate(8,'...') }}
</p>
{{ '<p><b>HyperText Markup Language</b>, commonly referred to as <b>HTML</b></p>'|humanizer_truncate_html(3)|raw }}
{{ '<p><b>HyperText Markup Language</b>, commonly referred to as <b>HTML</b></p>'|humanizer_truncate_html(3,'<b>')|raw }}

```