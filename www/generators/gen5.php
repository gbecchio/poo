<?php
function generator()
{
    echo yield;
}

$gen = generator();
$gen->send("Hello world !\n\r");
$gen->send('kourok');
var_dump($gen);
