<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(-1);
ini_set('error_reporting', -1);

$classeMagicien = new ReflectionClass('Greg\Magicien');

if ($classeMagicien->implementsInterface('Greg\IMagicien'))
{
  echo 'La classe Magicien implémente l\'interface iMagicien';
}
else
{
  echo 'La classe Magicien n\'implémente pas l\'interface iMagicien';
}
echo "<pre>";
var_dump($classeMagicien);
echo "<br />";
print_r($classeMagicien->getInterfaceNames());
echo "</ pre>";