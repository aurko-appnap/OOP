<?php

abstract class Number{
    abstract function one();

    function two()
    {

    }
}

abstract class Weight extends Number{
    abstract function pound();
}

 class Height extends Weight{
    function one()
    {

    }
    function pound()
    {

    }
}