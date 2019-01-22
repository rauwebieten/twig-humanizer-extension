<?php

namespace examples;

use Coduo\PHPHumanizer\NumberHumanizer;
use RauweBieten\TwigHumanizerExtension;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once  __DIR__ . '/../vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__);
$twig = new Environment($loader);
$twig->addExtension(new TwigHumanizerExtension());

echo $twig->render('template.html.twig',[]);