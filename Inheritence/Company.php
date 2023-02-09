<?php

class Company
{
    public $name;
    private $phone;
    protected $email;

    function __construct($name = NULL, $phone = NULL, $email = NULL)
    {
        return $this->name;
        return $this->phone;
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }

    public function showName()
    {
        echo $this->name."\n";
    }
}

class Appnap extends Company
{
    public $location;
    public function __construct($name=0, $phone=0, $email=0 , $location = 0)
    {
        Parent::__construct($name, $phone, $email);
        $this->location = $location;
    }

    public function showName()
    {
        echo $this->name."\n";
    }
}

$a = new Appnap;
$c = new Company;

$c->setName('BKash');

// echo $c->name;


// $c->showName();
$a->showName();