<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class A
{
    public $pub;
    private $a;
    function __construct($a)
    {
        $this->a = $a;
        $this->pub = 3;
    }
    function __clone()
    {
        $this->a = 3;
    }
    function parcours()
    {
        foreach($this as $key=>$val)
        {
            echo 'clé=>';
            var_dump($key);
            echo "</ br>";
            echo 'valeur=>';
            var_dump($val);
        }
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
var_dump($a);
foreach($a as $key=>$val)
{
    echo 'clé=>';
    var_dump($key);
    echo "</ br>";
    echo 'valeur=>';
    var_dump($val);
}
$a->parcours();
echo '</pre>';