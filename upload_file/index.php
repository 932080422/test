<?php
class A
{
    public static $a = 1;
    public function test()
    {
        $s = new self;
        echo $s::$a;
    }
}
class B extends A
{
    public static $a = 2;
}
$t = new B();
$t->test();
