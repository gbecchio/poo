<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(-1);
ini_set('error_reporting', -1);

class A
{
    public function hello($arg1, $arg2, $arg3 = 1, $arg4 = 'Hello world !')
    {
        echo 'Hello world !';
    }

    public function salut($arg1, $arg2, $arg3 = 1, $arg4 = 'Hello world !')
    {
        echo 'Hello world !';
    }
}

$methode = new ReflectionMethod('A', 'salut');

$classeA = new ReflectionClass('A');
$methode2 = $classeA->getMethod('hello');

echo "<pre>";
var_dump($methode);
echo "<br />";
var_dump($methode2->getName());
echo "<br />";
var_dump($methode2->isConstructor());
echo "<br />";
var_dump($methode2->isDestructor());
echo "</ pre>";