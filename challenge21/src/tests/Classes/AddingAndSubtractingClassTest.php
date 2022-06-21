<?php

namespace Test\Classes;

use Tests\TestCase;
use App\Simple\AddingAndSubtracting;

class AddingAndSubtractingClassTest extends TestCase
{

    public function test_we_can_add_numbers()
    {
        $this->assertEquals(170, AddingAndSubtracting::add(110, 20, 40));
    }


    public function test_we_can_subtract_numbers()
    {
        $this->assertEquals(100, AddingAndSubtracting::subtract(200, 20, 40, 30, 10));
    }

}