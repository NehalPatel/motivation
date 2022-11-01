<?php

namespace NehalPatel\Motivation\Tests;

use NehalPatel\Motivation\Facades\Motivation;
use NehalPatel\Motivation\Providers\MotivationAppServiceProvider;

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