<?php
error_reporting(-1);
ini_set('error_reporting', -1);

$additionneur = function()
{
    $this->_nbr += 5;
};

class MaClasse
{
    private $_nbr = 0;

    public function nbr()
    {
        return $this->_nbr;
    }
}

$obj = new MaClasse;

// On obtient une copie de notre closure qui sera liée à notre objet $obj
// Cette nouvelle closure sera appelée en tant que méthode de MaClasse
// On aurait tout aussi bien pu passer $obj en second argument
$additionneur = $additionneur->bindTo($obj, 'MaClasse');
$additionneur();

echo $obj->nbr(); // Affiche bien 5