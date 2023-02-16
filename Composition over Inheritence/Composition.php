<?php

class MFS
{
    public int $amount;
    public int $charge;

    public function __construct(ServiceType $service)
    {
        $this->amount = $service->amount;
        $this->charge = $service->charge;
    }
}

class ServiceType
{
    public $amount = 0;
    public $charge = 0;
}

class CashOut extends ServiceType
{
    public $amount = 1000;
    public $charge = 15;
}

class Payment extends ServiceType
{
    public $amount = 2000;
    public $charge = 30;
}

$bkash = new MFS(new Payment());
print_r($bkash);