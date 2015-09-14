<?php
error_reporting(-1);
ini_set('error_reporting', -1);
include_once __DIR__.'/HtmlFormater.php';
class Writer
{
    use HtmlFormater;

    public function write($text)
    {
        file_put_contents('fichier.txt', $this->format($text));
    }
}

$w = new Writer();
$txt = <<<EOT
Ceci est un texte
et c'est bien
EOT;

echo "<pre>";
$w->write($txt);
echo "</ pre>";