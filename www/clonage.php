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

$a = new A('a');
$c = $a;
$b = clone $a;
print_r($a);
print_r($b);
var_dump($a);
var_dump($b);
print_r($c);
var_dump($c);
echo '</pre>';