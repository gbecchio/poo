<?php
error_reporting(-1);
ini_set('error_reporting', -1);

try
{
    $db = new PDO('mysql:host=localhost;dbname=poo', 'root', 'grego'); // Tentative de connexion.
    echo 'Connexion réussie !'; // Si la connexion a réussi, alors cette instruction sera exécutée.
}

catch (PDOException $e) // On attrape les exceptions PDOException.
{
    echo 'La connexion a échoué.<br />';
    echo 'Informations : [', $e->getCode(), '] ', $e->getMessage(); // On affiche le n° de l'erreur ainsi que le message.
}

echo "<pre>";
echo "</ pre>";