<?php
$arr['key'] = 1;
echo "{$arr['key']}";
print($arr['key']);
class Ace
{
   protected $a = 1;
}
$ace = new Ace();

echo "{$ace->$a}";
