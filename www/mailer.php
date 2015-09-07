<?php
error_reporting(-1);
ini_set('error_reporting', -1);

include_once __DIR__."/HtmlFormater.php";

class Mailer
{
    use HtmlFormater;

    public function send($text)
    {
        mail('gbecchio@yahoo.fr', 'Test avec les traits', $this->format($text));
    }
}

$m = new Mailer();
$txt = <<<EOT
Ceci est un texte
et c'est bien
EOT;

echo "<pre>";
$m->send($txt);
echo "</ pre>";