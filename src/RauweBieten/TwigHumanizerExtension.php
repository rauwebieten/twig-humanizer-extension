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
            new \Twig_Filter('humanize', [StringHumanizer::class, 'humanize']),
            new \Twig_Filter('truncate', [StringHumanizer::class, 'truncate']),
            new \Twig_Filter('truncate_html', [StringHumanizer::class, 'truncateHtml']),

            new \Twig_Filter('ordinalize', [NumberHumanizer::class, 'ordinalize']),
            new \Twig_Filter('ordinal', [NumberHumanizer::class, 'ordinal']),
            new \Twig_Filter('to_roman', [NumberHumanizer::class, 'toRoman']),
            new \Twig_Filter('from_roman', [NumberHumanizer::class, 'fromRoman']),
            new \Twig_Filter('binary_suffix', [NumberHumanizer::class, 'binarySuffix']),
            new \Twig_Filter('precise_binary_suffix', [NumberHumanizer::class, 'preciseBinarySuffix']),
            new \Twig_Filter('metric_suffix', [NumberHumanizer::class, 'metricSuffix']),
            new \Twig_Filter('metric_suffix', [NumberHumanizer::class, 'metricSuffix']),

            new \Twig_Filter('oxford', [CollectionHumanizer::class, 'oxford']),

            new \Twig_Filter('difference', [DateTimeHumanizer::class, 'difference']),
            new \Twig_Filter('precise_difference', [DateTimeHumanizer::class, 'preciseDifference']),
        ];
    }
}