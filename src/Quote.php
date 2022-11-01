<?php

namespace Nehal\Motivation;

use Illuminate\Support\Arr;

class Quote
{
    public function quote()
    {
        //return "Be like water, and you can be anything";

        return 'Quote of the day:'. Arr::random(config('motivation-quotes.quotes'));
    }
}