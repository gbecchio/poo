<?php
error_reporting(-1);
ini_set('error_reporting', -1);

trait HTMLFormater
{
    public $html = 10;
    public function formatHTML($text)
    {
        return '<p>Date : '.date('d/m/Y').'</p>'."\n".
        '<p>'.nl2br($text).'</p>';
    }
}

trait TextFormater
{
    public function formatText($text)
    {
        return 'Date : '.date('d/m/Y')."\n".$text;
    }
}

trait Same1
{
    public $same1 = 1;

    public function same()
    {
        echo __TRAIT__;
    }
}

trait Same2
{
    public $same2 = 2;

    public function same()
    {
        echo __TRAIT__;
    }
}

class Writer
{
    use HTMLFormater, TextFormater;
    use Same1, Same2
    {
        Same2::same insteadof Same1;
    }

    public function write($text)
    {
        echo $this->html;
        echo $this->formatHTML($text);
        file_put_contents('fichier.txt', $this->formatText($text));
    }
}

$w = new Writer();
$txt = <<<EOT
Ceci est un texte
et c'est bien
EOT;

echo "<pre>";
$w->write($txt);
$w->same();
echo "me";
$w->html;
echo "</ pre>";