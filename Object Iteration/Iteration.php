<?php

class Appnap{
    public $name= "Appnap Technologies Ltd.";
    public $website = "www.appnap.io";

    private $project = "AparPet, RoboDoc, Majhi";
    public static $employeeCount = "100";

    public function getProperties()
    {
        echo "\nShowing---------------------------2\n";
        foreach($this as $key => $value)
        {
            echo $key.' : '.$value."\n";
        }
    }
}

$call = new Appnap();

echo "\nShowing---------------------------1\n";
foreach($call as $key => $value)
{
    echo $key.' : '.$value."\n";
}

$call->getProperties();

$reflection = new ReflectionClass('Appnap');
$staticClass = $reflection->getStaticProperties();

echo "\nShowing---------------------------3\n";
foreach($staticClass as $key => $value)
{
    echo $key.' : '.$value."\n";
}