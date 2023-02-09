<?php

interface Payment{
    public function createPayment();
    public function confirmPayment();
    public function declinePayment();
}

interface Transaction extends Payment{
    public function credit();
}

class Bkash implements Transaction{
    public function createPayment(){

    }
    public function confirmPayment(){

    }
    public function declinePayment(){

    }
    public function credit(){
        
    }
}