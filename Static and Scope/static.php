<?php

class Box{
    static $height = '1';
    const WEIGHT = '10';

    static function check()
    {
        echo "Checking the value ".Box::WEIGHT."\n";
    }
}

Box::check();
// echo Box::WEIGHT;