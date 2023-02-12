<!-- MULTIPLE TRAITS WITH SAME NAMED METHOD. INSTEADOF, AS -->

<?php

trait One{
    public function address()
    {
        echo "Kuril, Dhaka\n";
    }
    public function website()
    {
        echo "robodocbd.com\n";
    }
}

trait Two{
    public function website()
    {
        echo "appnap.com\n";
    }

    public function address()
    {
        echo "Godaddy\n";
    }
}

class Company
{
    use One, Two{
        One::address insteadof Two;
        One::website insteadof Two;
        Two::website as twoWebsite;
    }
}

$com = new Company();
$com->website();
$com->twoWebsite();