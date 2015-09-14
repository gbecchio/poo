<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(-1);
ini_set('error_reporting', -1);

$mag = new Greg\Magicien(array());
$magicien = new Greg\Magicien(['nom' => 'vyk12', 'type' => 'magicien']);
$classeMagicien = new ReflectionObject($magicien);

echo "<pre>";
var_dump($classeMagicien);
$classeMagicien = new ReflectionClass('Greg\Magicien'); // Le nom de la classe doit être entre apostrophes ou guillemets.
var_dump($classeMagicien);
echo "</ pre>";