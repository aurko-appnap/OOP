<?php

trait commonCodes{
    public $companyName = "Appnap Tech";

    public function address()
    {
        echo "Kuril, Dhaka\n";
    }
}

class Another
{
    public function address()
    {
        echo "Dhaka, Bangladesh";
    }
}

class Company extends Another
{
    // use commonCodes;
}

$com = new Company();
$com->address();