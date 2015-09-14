<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(-1);
ini_set('error_reporting', -1);

$classeIMagicien = new ReflectionClass('Greg\IMagicien');

echo "<pre>";
if ($classeIMagicien->isInterface())
{
    echo 'La classe iMagicien est une interface';
}
else
{
    echo 'La classe iMagicien n\'est pas une interface';
}
var_dump($classeIMagicien);
echo "</ pre>";