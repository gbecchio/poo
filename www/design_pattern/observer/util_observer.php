<?php
error_reporting(-1);

ini_set('error_reporting', -1);

include_once __DIR__."/Subject.php";
include_once __DIR__."/Observer1.php";
include_once __DIR__."/Observer2.php";

$o = new Subject();
$o->attach(new Observer1)->attach(new Observer2); // Ajout d'un autre observateur.
$o->setNom('Victor'); // On modifie le nom pour voir si les classes observatrices ont bien été notifiées.

try
{
    $nom = $o->getNom();
}
catch(Exception $e)
{
    echo $e->getMessage();
}

echo "<pre>";
echo $nom;
echo "<br />";
echo "</ pre>";