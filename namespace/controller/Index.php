<?php

namespace controller;
use app\Index2;
include("../app\Index2.php");
spl_autoload_register(function ($class_name) {
    $file = str_replace('\\','/',$class_name).'.php';
    include $file ;
});
$a = new Index2;
var_dump($a);

class Index
{

}