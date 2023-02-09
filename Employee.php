<?php
class Employee 
{
    var $name = 'A';
    var $phone = '1';

    function __construct()
    {
        echo "constract\n";
    }

    function custom_name()
    {
        $this->name = 'B';
        echo $this->name;
    }
    function custom_phone()
    {
        $this->phone = '2';
        echo $this->phone;
    }

    public function both()
    {
        $this->custom_name();
        $this->custom_phone();
    }

    function __destruct()
    {
        echo "\ndestruct\n";
    }
}

$a = new Employee;
$a->both();
$a=null;
echo "last echo\n";