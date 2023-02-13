<?php

class Engineer
{
    public $name;
    public $email;
    public Company $website;

    public function __construct($name, $email, $website)
    {
        $this->name = $name;
        $this->email = $email;
        $this->website = $website;
    }
}

class Company
{
    public $company_name;
    public $website;

    public function __construct($company_name , $website)
    {
        $this->company_name = $company_name;
        $this->website = $website;
    }
}

$company = new Company('Appnap' , 'appnap.io');
$engineer = new Engineer('aurko' , 'mahmudur@appnap.io', $company);

$temp = clone $engineer;

$engineer->email = "abc@gmail.com";

print_r($temp);
print_r($engineer);