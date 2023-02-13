<?php

class Employee
{
    public $name = "Aurko";
    public function name()
    {
        echo "Employee name is: ".$this->name."\n";
    }

    public function __set($name, $value)
    {
        echo "I am getting $name with value $value \n";
    }

    public function __get($name)
    {
        return $name ?? "";
    }

    public function __isset($name)
    {
        echo "$name is trying to set\n";
    }

    public function __unset($name)
    {
        echo "$name has been unset\n";
    }

    public function __call($name, $arguments)
    {
        echo "receiving $name with implode(', ', $arguments) \n";
    }
}

$e = new Employee;
echo $e->name."\n";

$e->email = "aurko.nsu.bd@gmail.com";                           //OVERLOADING with __set() magic method.
echo "Getting value from get magic method: ".$e->email."\n";    //retriving OVERLOADED data using __get() method.

if(isset($e->id))           //property is set or not is checking using __isset() magic method.
{
    echo "ID Found \n";
}

unset($e->email);       //property unset using __unset() magic method.

$e->salary("ABC");      //catching the undefined method with it's arguments using __call() magic method.