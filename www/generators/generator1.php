<?php
error_reporting(-1);
ini_set('error_reporting', -1);

$lines = file(__DIR__.'/MonTexte.txt');

foreach ($lines as $line)
{
    echo $line.">>>>";
}
echo "<pre>";
var_dump($lines);
echo "</ pre>";