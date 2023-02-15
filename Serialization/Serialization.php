<?php

class User{
    public $name = "Abir";
    private $phone = "01710000000";
    protected $nid = "121131141";

    public function job()
    {
        return "He is an engineer";
    }

    public function __serialize(): array
    {
        return [
            'temp_name' => $this->name,
            'temp_phone' => $this->phone,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->phone = $data['temp_phone'];
    }

    public function __wakeup()
    {
        echo "\nwaking up! \n";
    }

}

$call = new User();
print_r($call);
print_r("\n");

$call2 = serialize($call);
print_r($call2);
print_r("\n");

$call3 = unserialize($call2);
print_r($call3);
print_r("\n");