<?php

class User
{
    public int $phone;
    public ?float $price;
    public ?string $name;
    public ?bool $isAdmin;

    public function __construct()
    {
        $this->phone = $phone;
        $this->price = $price;
        $this->name = $name;
        $this->isAdmin = $isAdmin;
    }
}


print_r(new User());