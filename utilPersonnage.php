<?php
include_once __DIR__.'/vendor/autoload.php';
use \Greg\Personnage;
use \Greg\PersonnageManager;

$tab1 = [
'id'=>1,
'nom'=>'greg',
'degats'=>10
];
$tab2 = [
'id'=>2,
'nom'=>'math',
'degats'=>9 
];

$personnage1 = new Personnage($tab1);
$personnage2 = new Personnage($tab2);
$a = $personnage1->frapper($personnage2);
$a = $personnage1->frapper($personnage2);
$a = $personnage1->frapper($personnage2);
$a = $personnage1->frapper($personnage2);
$a = $personnage1->frapper($personnage2);
$a = $personnage1->frapper($personnage2);
$a = $personnage1->frapper($personnage2);
$a = $personnage1->frapper($personnage2);
var_dump($a);
var_dump($personnage1);
var_dump($personnage2);

$db = new PDO('mysql:host=localhost;dbname=poo', 'root', 'greg');
$manager1 = new PersonnageManager($db);
var_dump($manager1);