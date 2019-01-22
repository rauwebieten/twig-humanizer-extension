<?php
declare(strict_types=1);

class TwigHumanizerExtensionTest extends Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        return [
            new \RauweBieten\TwigHumanizerExtension()
        ];
    }

    public function getFixturesDir()
    {
        return __DIR__ . '/fixtures';
    }
}
