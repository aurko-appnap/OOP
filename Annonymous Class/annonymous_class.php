<!-- ANNONYMOUS CLASS -->

<?php

trait NewTrait{}
interface NewInterface{}
class NewClass{}

var_dump(new class extends NewClass implements NewInterface{
    use NewTrait;
    
    public $num;
    function __construct($num = 0)
    {
        $this->num = $num;
    }
    public function getNum()
    {
        return $this->num;
    }
});