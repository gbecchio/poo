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