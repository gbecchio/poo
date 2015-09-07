<?php
error_reporting(-1);
ini_set('error_reporting', -1);

trait A
{
    abstract public function saySomething();
    abstract public function same();
}

trait B
{
    use A;

    public function saySomethingElse()
    {
        echo 'Je suis le trait B !';
    }

    public function saySomething()
    {
        echo "hello ";
    }

    abstract public function same();
}

class MaClasse
{
    use B;

    public function same()
    {
        echo "même";
    }
}

$o = new MaClasse;

echo "<pre>";

$o->saySomething(); // Affiche « Je suis le trait A ! »
$o->saySomethingElse(); // Affiche « Je suis le trait B ! »
$o->same();
echo "</ pre>";