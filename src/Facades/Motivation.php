<?php

namespace NehalPatel\Motivation\Facades;

use Illuminate\Support\Facades\Facade;

class Motivation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'quote';
    }
}