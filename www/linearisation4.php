<?php
error_reporting(-1);
ini_set('error_reporting', -1);
class test
{
    private $truc;
    protected $machin;
    public $yop;
    public function __construct() // Constructeur peut aussi être appelé __construct en PHP 5.
    {
        $this->truc = mt_rand(1,99);
        $this->machin = array('truc'=>array(5,8,7),'chose'=>5,array('t','y','u','p'));
    }
    public function a($a)
    {
        echo $a;
    }
}
$object = new test();
echo "<pre>";
var_dump(serialize($object));
echo '<br />';
echo "</ pre>";
