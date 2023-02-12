<?php

use Employee as GlobalEmployee;

abstract class Employee
{
    abstract public function salary();
    abstract public function id();
}

class Tech extends Employee
{
    public function salary()
    {
        echo "Tech Salary: 10 Million\n";
    }

    public function id()
    {
        echo "ID Starts with 151 \n";
    }
}

class HR extends Employee
{
    public function salary()
    {
        echo "HR Salary: 5 Million\n";
    }

    public function id()
    {
        echo "ID Starts with 161 \n";
    }
}

class Marketing extends Employee
{
    public function salary()
    {
        echo "Tech Salary: 8 Million\n";
    }

    public function id()
    {
        echo "ID Starts with 171 \n";
    }
}

$tech = new Tech();
$hr = new HR();

$tech->salary();
$hr->salary();

$tech->id();
$hr->id();