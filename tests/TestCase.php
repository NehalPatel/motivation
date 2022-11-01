<?php

namespace Nehal\Motivation\Tests;

use Nehal\Motivation\Facades\Motivation;
use Nehal\Motivation\Providers\MotivationAppServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            MotivationAppServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Motivation' => Motivation::class
        ];
    }

}