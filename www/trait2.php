<?php
error_reporting(-1);
ini_set('error_reporting', -1);

trait A
{
    public function saySomething()
    {
        echo 'Je suis le trait A !';
    }
}

trait B
{
    use A;

    public function saySomethingElse()
    {
        echo 'Je suis le trait B !';
    }
}

class MaClasse
{
    use B;
}

$o = new MaClasse;

echo "<pre>";
$o->saySomething(); // Affiche « Je suis le trait A ! »
$o->saySomethingElse(); // Affiche « Je suis le trait B ! »
echo "</ pre>";