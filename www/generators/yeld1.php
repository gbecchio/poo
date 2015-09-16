<?php
error_reporting(-1);
ini_set('error_reporting', -1);

function generator()
{
    echo (yield 'Hello world !');
    echo yield;
    echo (yield '2+2');
}

$gen = generator();

// On envoie « Message 1 »
// PHP va donc l'afficher grâce au premier echo du générateur
$gen->send('Message 1');

// On envoie « Message 2 »
// PHP reprend l'exécution du générateur et affiche le message grâce au 2ème echo
$gen->send('Message 2');

// On envoie « Message 3 »
// La fonction générateur s’était déjà terminée, donc rien ne se passe
$gen->send('Message 3');