<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(-1);
ini_set('error_reporting', -1);

// On commence par inclure les fichiers nécessaires.
require 'MyAnnotations.php';

$reflectedClass = new Addendum\ReflectionAnnotatedClass('Greg\Personnage');
echo "<pre>";
var_dump($reflectedClass->getAnnotations());
echo "</ pre>";