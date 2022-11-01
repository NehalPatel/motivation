<?php

namespace Nehal\Motivation\Facades;

use Illuminate\Support\Facades\Facade;

class Motivation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'quote';
    }
}