<?php

interface Employee
{
    public function salary();
    public function id();
}

class Tech implements Employee
{
    function salary()
    {
        echo "Tech Salary: 10 Million\n";
    }

    function id()
    {
        echo "ID Starts with 151 \n";
    }
}

class HR implements Employee
{
    function salary()
    {
        echo "HR Salary: 5 Million\n";
    }

    function id()
    {
        echo "ID Starts with 161 \n";
    }
}

class Marketing implements Employee
{
    function salary()
    {
        echo "Tech Salary: 8 Million\n";
    }

    function id()
    {
        echo "ID Starts with 171 \n";
    }
}

$tech = new Tech();
$hr = new HR();
$marketing = new Marketing();

$tech->salary();
$hr->salary();

$marketing->id();