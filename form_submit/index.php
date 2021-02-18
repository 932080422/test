<?php
namespace a;
function getHtml($str)
{
    //include $str;
    static $a = 0;
    $a++;
    echo $a;
}
$c = 10;
function &test()
{
    static $count = 0;
    global $c;
    $c = 5;
    $count++;
    //echo $count;
//    if ($count < 10) {
//        test();
//    }
    //$count--;
    return $c;
}
//getHtml("index.html");
//getHtml(1);
$a = test();
echo $c;
echo __FILE__ ;
echo __LINE__;
echo __DIR__;
echo __FUNCTION__;
//echo __CLASS__;
echo __NAMESPACE__;

//echo date("Y-m-d H:i:s",1610691087);


