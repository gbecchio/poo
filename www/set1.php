<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class testSet
{
    private $tabVar = [];
    private $t='';
    public $w;
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
    function __call($methode, $args)
    {
        echo "<pre>";
        var_dump($methode);
        var_dump($args);
        echo "</ pre>";
    }
}
$ts = new testSet();
$ts->a = 10;
$ts->kouraphantei = "ceci est";
var_dump($ts->a);
// echo $t->kouraphantei;
// var_dump($t->x);
// print_r($t);
echo "<pre>";
// var_dump($ts->tabVar);
// var_dump(isset($ts->a));
// var_dump(isset($ts->kouraphantei));
// var_dump(isset($ts->x));
// unset($ts->x);
// unset($ts->a);
// unset($ts->w);
// unset($ts->t);
$ts->mafamille('ambroise', ['a'=>1, "b"=>"run"]);
echo "</ pre>";