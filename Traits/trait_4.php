<?php

trait One{
    public function address()
    {
        echo "Kuril, Dhaka\n";
    }
    public static function website()
    {
        echo "robodocbd.com\n";
    }

    abstract function employee_number();
}

class Company
{
    use One;
    public function employee_number()
    {
        echo "Total Employee Number 100\n";
    }
}

$com = new Company();
$com->employee_number();
Company::website();