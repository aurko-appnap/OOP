<?php

final class FinalClass
{
    public $name = 'Aurko';

    final public function email()
    {
        return "mahmudur@appnap.io";
    }
}

class ChildClass extends FinalClass
{
    public function email()
    {
        return "aurko.nsu.bd@gmail.com";
    }
}

$call = new ChildClass;

echo "Name Variable: ".$call->name."\n";
echo "Email: ".$call->email()."\n";