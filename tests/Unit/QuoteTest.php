<?php

namespace NehalPatel\Motivation\Tests\Unit;


use NehalPatel\Motivation\Facades\Motivation;
use NehalPatel\Motivation\Tests\TestCase;

class QuoteTest extends TestCase
{
    function test_motivation_return_a_random_quote()
    {
        $this->assertNotEmpty( Motivation::quote());
    }
}