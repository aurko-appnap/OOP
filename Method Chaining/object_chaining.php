<?php

class Number
{
    public $result = 0;

    public function sum($number)
    {
        $this->result += $number;
        return $this;
    }

    public function sub($number)
    {
        $this->result -= $number;
        return $this;
    }

    public function mul($number)
    {
        $this->result *= $number;
        return $this;
    }

    public function result()
    {
        return $this->result;
    }
}

$object = new Number;

echo $object->sum(5)->mul(5)->sub(5)->result()."\n";