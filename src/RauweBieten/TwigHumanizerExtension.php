<?php

namespace RauweBieten;

use Coduo\PHPHumanizer\CollectionHumanizer;
use Coduo\PHPHumanizer\DateTimeHumanizer;
use Coduo\PHPHumanizer\NumberHumanizer;
use Coduo\PHPHumanizer\StringHumanizer;

class TwigHumanizerExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_Filter('humanizer_humanize', [StringHumanizer::class, 'humanize']),
            new \Twig_Filter('humanizer_truncate', [StringHumanizer::class, 'truncate']),
            new \Twig_Filter('humanizer_truncate_html', [StringHumanizer::class, 'truncateHtml']),

            new \Twig_Filter('humanizer_ordinalize', [NumberHumanizer::class, 'ordinalize']),
            new \Twig_Filter('humanizer_ordinal', [NumberHumanizer::class, 'ordinal']),
            new \Twig_Filter('humanizer_to_roman', [NumberHumanizer::class, 'toRoman']),
            new \Twig_Filter('humanizer_from_roman', [NumberHumanizer::class, 'fromRoman']),
            new \Twig_Filter('humanizer_binary_suffix', [NumberHumanizer::class, 'binarySuffix']),
            new \Twig_Filter('humanizer_precise_binary_suffix', [NumberHumanizer::class, 'preciseBinarySuffix']),
            new \Twig_Filter('humanizer_metric_suffix', [NumberHumanizer::class, 'metricSuffix']),

            new \Twig_Filter('humanizer_oxford', [CollectionHumanizer::class, 'oxford']),

            new \Twig_Filter('humanizer_difference', [DateTimeHumanizer::class, 'difference']),
            new \Twig_Filter('humanizer_precise_difference', [DateTimeHumanizer::class, 'preciseDifference']),
        ];
    }
}