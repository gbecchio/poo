<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

class testSet
{
    private $tabVar = [];
    private $t='a';
    function __set($nom, $valeur)
    {
        $this->tabVar[$nom] = $valeur;
        var_dump($this->tabVar);
        $this->$nom = $valeur;
    }
    function __get($nom)
    {
        return $this->$nom;
    }
    function __isset($nom)
    {
        var_dump($nom);
        if(isset($this->$nom))
        {
            echo "oui il est isseté {$nom} avec la valeur {$this->$nom}";
            return true;
        }
        else
        {
            echo "non {$nom} n'est pas isseté";
            return false;
        }
    }
    function __unset($nom)
    {
        echo "{$nom}";
    }
}
$ts = new testSet();
$ts->a = 10;
$ts->kouraphantei = "ceci est";
// echo $t->kouraphantei;
// var_dump($t->x);
// print_r($t);
echo "<pre>";
// var_dump($ts->tabVar);
var_dump(isset($ts->a));
var_dump(isset($ts->kouraphantei));
var_dump(isset($ts->x));
unset($ts->x);
unset($ts->a);
unset($ts->f);
echo "</ pre>";