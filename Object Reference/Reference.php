<?php

class Student
{
    public $name = 'Aurko';
    public $roll = 101;
    public function className()
    {
        return __CLASS__;
    }
}

$call = new Student;
$copyCall = &$call;         //Here & sign is assigning call object's memory address to copyCall object. Otherwise both $call and $copyCall object will locate same memory address where the resources are located. 

$call = null;

var_dump($call, $copyCall);