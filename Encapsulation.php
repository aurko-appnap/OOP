<?php

class Employee
{
    public $name;
    private $salary;
    protected $phone;

    function __construct($name = 0, $salary = 0, $phone = 0)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->phone = $phone;
    }

    public function getName() 
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSalary() 
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$temp = new Employee;
$temp->setName('A');

$temp->setSalary('500');

var_dump($temp->getSalary());