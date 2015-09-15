<?php
error_reporting(-1);
ini_set('error_reporting', -1);

include_once __DIR__."/Imovable.php";

class Personne implements Imovable
{
    public function move($dest)
    {
        echo $dest;
    }
}
$personne = new Personne();
$personne->move('rien');
echo "<pre>";
echo Personne::MA_CONSTANTE;
echo "<br />";
echo Imovable::MA_CONSTANTE;
echo "</ pre>";