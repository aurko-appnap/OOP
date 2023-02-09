<?php

class One{
    public $name = '1';

    function show()
    {
        echo "One\n";
    }
}

class Two extends One{
    public $name = '1';

    function show()
    {
        One::show();
        echo "Two\n";
    }
}

class Three extends Two{
    public $name = '1';

    function show()
    {
        Two::show();
        echo "Three\n";
    }
}

$number = new Three();
$number->show();