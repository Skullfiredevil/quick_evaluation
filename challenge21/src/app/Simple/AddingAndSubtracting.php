<?php

namespace App\Simple;

class AddingAndSubtracting
{

    public static function add(...$numbers) {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }

    public static function subtract($start, ...$numbers) {
        foreach ($numbers as $number) {
            $total -= $number;
        }
        return $start;
    }

}