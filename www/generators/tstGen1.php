<?php
error_reporting(-1);
ini_set('error_reporting', -1);

function autoload($classname)
{
    if (file_exists($file = __DIR__ . '/' . $classname . '.php'))
    {
        require $file;
    }
}

spl_autoload_register('autoload');

$fileReader = new FileReader(__DIR__.'/MonTexte.txt');


foreach ($fileReader as $line)
{
    echo "<pre>";
    var_dump($fileReader);
    var_dump($line);
    echo "</ pre>";
}