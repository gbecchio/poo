<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(-1);
ini_set('error_reporting', -1);

class A
{
    public function hello($arg1, $arg2, $arg3 = 1, $arg4 = 'Hello world !')
    {
        var_dump($arg1, $arg2, $arg3, $arg4);
    }
}

$a = new A;
$hello = new ReflectionMethod('A', 'hello');

$hello->invoke($a, 'test', 'autre test', 1001, "coucks"); // On ne va passer que deux arguments à notre méthode.

$hello->invokeArgs($a, ['test', 'autre test']); // Les deux arguments sont cette fois-ci contenus dans un tableau.
echo "<pre>";
var_dump($hello);
echo "</ pre>";