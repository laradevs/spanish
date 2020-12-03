<?php
namespace LaraDevs\Spanish\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \LaraDevs\Spanish\SpanishServiceProvider::class,
        ];
    }
}
