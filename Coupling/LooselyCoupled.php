<?php

interface Facility
{
    public function facility();
}

class Employee
{
    public $name = "Aurko";
    public $email = "mahmudur@appnap.io";
    public Facility $facility;

    public function __construct($name , $email, Facility $facility)
    {
        $this->name = $name;
        $this->email = $email;
        $this->facility = $facility;
    }
}

class Leave implements Facility
{
    public $casual;
    public $medical;

    public function __construct($casual, $medical)
    {
        $this->casual = $casual;
        $this->medical = $medical;
    }

    public function facility()
    {
        $this->casual = 20;
        $this->medical = 15;
    }
}

class Salary implements Facility
{
    public $salary;
    public $bonus;

    public function __construct($salary , $bonus)
    {
        $this->salary = $salary;
        $this->bonus = $bonus;
    }

    public function facility()
    {
        $this->salary = 1000;
        $this->bonus = 500;
    }
}

$aurkoSalary = new Salary(1000 , 500);
$aurkoLeave = new Leave(10 , 20);
$aurko = new Employee('Aurko' , "email.com", $aurkoLeave);



/*
Istead of passing a class as property in Employee construction, a interface is passing.
And the method of the interface is implementing in the classes, which will be passed to the Employee class.

And it is loosely coupled. 
*/

print_r($aurko);
