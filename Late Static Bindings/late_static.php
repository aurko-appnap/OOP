<?php

class One 
{
    public static function classShow()
    {
        return __CLASS__;
    }
    public static function getSomething()
    {
        echo static::classShow()."\n";      //self keyword operate with the class it is in. static keyword operate the class calls it. 
    }
}

class Two extends One 
{
    public static function classShow()
    {
        return __CLASS__;
    }
}

One::getSomething();