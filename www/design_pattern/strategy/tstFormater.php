<?php
error_reporting(-1);
ini_set('error_reporting', -1);

function autoload($class)
{
    if (file_exists($path = __DIR__.'/'.$class.'.php'))
    {
        require $path;
    }
}

spl_autoload_register('autoload');

$writer = new FileWriter(new HTMLFormater, __DIR__.'/file.html');
var_dump($writer);
$writer->write('Hello world !');