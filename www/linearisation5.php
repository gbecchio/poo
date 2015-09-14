<?php
error_reporting(-1);
ini_set('error_reporting', -1);
class test
{
    private $truc;
    private $muche;
    function test() // Constructeur peut aussi être appelé __construct en PHP 5.
    {
        $this->truc = mt_rand(1,24);
    }

    function __sleep()
    {
        $this->truc *= 7;
        $this->truc -= 3;
        $this->muche = [
            'a',
            'b'=>[
                'c'
            ]
        ];
        return array('truc', 'muche'); // On renvoie un array contenant le nom littéral de la variable, c.-à-d. 'truc' !
    }

    function __wakeup()
    {
        $this->muche=null;
        $this->truc += 3;
        $this->truc /= 7;
    }
}

$object = new test();

echo '<pre>';
print_r($object); // Sert à afficher de façon propre les propriétés d'un objet.
echo '</pre>';

$mid = serialize($object);

echo $mid;

$last = unserialize($mid);

echo '<pre>';
print_r($last); // Sert à afficher de façon propre les propriétés d'un objet.
echo '</pre>';