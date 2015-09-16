<?php
error_reporting(-1);
ini_set('error_reporting', -1);

function generator()
{
    echo "Début\n";
    yield;
    echo "Fin";
}

$gen = generator();
$gen->throw(new Exception('Test'));