<?php

class Employee
{
    public $name = "Aurko";
    public $email = "mahmudur@appnap.io";
    public $leave;

    public function __construct($name , $email, Leave $leave)
    {
        $this->name = $name;
        $this->email = $email;
        $this->leave = $leave;
    }
}

class Leave
{
    public $casual;
    public $medical;

    public function __construct($casual, $medical)
    {
        $this->casual = $casual;
        $this->medical = $medical;
    }
}

$aurkoLeave = new Leave(10 , 20);
$aurko = new Employee('Aurko' , "email.com", $aurkoLeave);

$mehediLeave = new Leave(25 , 50);
$mehedi = new Employee('Mehedi' , "mehedi@appnap.io", $mehediLeave);

print_r($aurko);
print_r($mehedi);
