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

class Salary
{
    public $salary;
    public $bonus;

    public function __construct($salary , $bonus)
    {
        $this->salary = $salary;
        $this->bonus = $bonus;
    }
}

$aurkoSalary = new Salary(1000 , 500);
$aurkoLeave = new Leave(10 , 20);
$aurko = new Employee('Aurko' , "email.com", $aurkoSalary);

/*
If other class object except Leave class, it will throw an error. 
It will accept only the objects of Leave class. 
Because Leave class object is defined in the Employee construction.
That is why it's tightly coupled.
*/

print_r($aurko);
