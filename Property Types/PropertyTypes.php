<?php

class User
{
    public int $phone;      //Here ? sign says that this property is nullable. If it's placed before the type name, then the property will execute with a warning. But if the sign is not placed over there, then it will through a Fatal error.
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