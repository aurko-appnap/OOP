<?php

trait commonCodes{
    public $companyName = "Appnap Tech";

    public function address()
    {
        echo "Kuril, Dhaka\n";
    }
}

class Company
{
    use commonCodes;
}

$com = new Company();

echo $com->companyName."\n";