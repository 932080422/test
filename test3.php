<?php
$a = 10;
function getA()
    {
        global $a;
        echo $a;
        return $a;
    }
getA();
class Abc
{
    public $b = 2 ;
    public function get()
    {
        global $b;
        $b = $b;
        echo $b;
        return $b;
    }
}
$c = new Abc();
$c->get();