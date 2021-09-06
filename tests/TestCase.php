<?php

namespace Vespera\LaravelMacros\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            'Vespera\LaravelMacros\Support\SeviceProvider',
        ];
    }
}
