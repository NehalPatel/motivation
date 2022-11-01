<?php

namespace Nehal\Motivation\Tests\Unit;


use Nehal\Motivation\Facades\Motivation;

class QuoteTest extends \Nehal\Motivation\Tests\TestCase
{
    function test_motivation_return_a_random_quote()
    {
        $this->assertNotEmpty( Motivation::quote());
    }
}