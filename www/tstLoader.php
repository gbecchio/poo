<?php
ini_set('display_errors', '1'); 
error_reporting(-1);
ini_set('error_reporting', -1);

include_once __DIR__."/../vendor/autoload.php";

$OCFramLoader = new Greg\lib\OCFram\SplClassLoader('OCFram', '/lib');
var_dump('a');
$OCFramLoader->register();
echo "<pre>";
var_dump($OCFramLoader);
echo "</ pre>";