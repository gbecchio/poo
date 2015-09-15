<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class FileWriter extends Writer
{
    // Attribut stockant le chemin du fichier.
    protected $file;

    public function __construct(Formater $formater, $file)
    {
        parent::__construct($formater);
        $this->file = $file;
    }

    public function write($text)
    {
        $f = fopen($this->file, 'w');
        var_dump($this->formater->format($text));
        fwrite($f, $this->formater->format($text));
        fclose($f);
    }
}