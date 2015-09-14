<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class A 
{
    private $a;
    function __construct($a)
    {
        $this->a = $a;
    }
    function __clone()
    {
        $this->a = 3;
    }
}
class Z
{
    private $a;
    function __construct($a)
    {
        $this->a = $a;
    }
}

$a = new A('a');
$c = $a;
$b = clone $a;
$z = new Z('a');
$y = clone $z;
echo "<pre>";
echo '$a == $c=>';
var_dump($a == $c);
echo '$a == $b=>';
var_dump($a == $b);
echo '$a == $z=>';
var_dump($a == $z);
echo '$z == $y=>';
var_dump($z == $y);
echo '</pre>';