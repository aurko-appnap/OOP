<!-- TRAIT COMPOSITION -->

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

trait Two{
    public function ceo()
    {
        echo "CEO is Mr. R\n";
    }

    public static function cto()
    {
        echo "CEO is Mr. S\n";
    }
}

trait compositTrait{
    use One, Two;
}

class Company
{
    use compositTrait;
    public function employee_number()
    {
        echo "Total Employee Number 100\n";
    }
}

$com = new Company();
$com->employee_number();
Company::website();
Company::cto();