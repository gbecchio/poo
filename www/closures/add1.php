<?php
error_reporting(-1);
ini_set('error_reporting', -1);
$kourok = rand(1, 10);
// Notre fonction accepte 1 argument : le nombre actuellement traité par array_map
function creerAdditionner($kourok)
{
    return function($nbr) use ($kourok)
    {
        return $nbr + $kourok;
    };
}
$listeNbr = [1, 2, 3, 4, 5];

$listeNbr2 = array_map(creerAdditionner($kourok), $listeNbr);

$kourok2 = 0;

$listeNbr3 = array_map(creerAdditionner($kourok2), $listeNbr);

$listeNbr4 = array_map(creerAdditionner($kourok), $listeNbr);

// Nous obtenons alors le tableau [6, 7, 8, 9, 10]
echo "<pre>";
print_r($listeNbr2);
print_r($listeNbr3);
print_r($listeNbr4);
echo "</ pre>";


$listeNbr = array_map(creerAdditionner(5), $listeNbr);

var_dump($listeNbr);

// On a : $listeNbr = [6, 7, 8, 9, 10]


$listeNbr = array_map(creerAdditionner(4), $listeNbr);

var_dump($listeNbr);