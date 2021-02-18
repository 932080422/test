<?php
namespace app;
//use app\Index2;
include "Index2.php";
spl_autoload_register(function ($class_name) {
    $file = '../'.str_replace('\\','/',$class_name).'.php';
    include $file ;
});
//    function __autoload($className)
//    {
//        $file = str_replace('\\','/',$className).'.php';
//        if(file_exists($file)) {
//            include $file;
//        }
//    }
$a = new Index2;
var_dump($a);
class Indexq
{

}
