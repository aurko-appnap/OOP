<?php

class Number
{
    static $result = 0;

    public static function sum($number)
    {
        self::$result += $number;
        return __CLASS__;
    }

    public static function sub($number)
    {
        self::$result -= $number;
        return __CLASS__;
    }

    public static function mul($number)
    {
        self::$result *= $number;
        return __CLASS__;
    }

    public static function result()
    {
        return self::$result;
    }
}


echo Number::sum(5)::mul(5)::sub(5)::result()."\n";