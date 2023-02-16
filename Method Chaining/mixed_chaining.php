<?php

class Number
{
    static $result = 0;

    public static function sum($number)
    {
        static::$result += $number;
        return new static;
    }

    public static function sub($number)
    {
        static::$result -= $number;
        return new static;
    }

    public static function mul($number)
    {
        static::$result *= $number;
        return new static;
    }

    public static function result()
    {
        return static::$result;
    }
}


echo Number::sum(5)->mul(5)->sub(5)->result()."\n";