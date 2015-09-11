<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class DBFactory
{
    public static function load($sgbdr)
    {
        $classe = 'SGBDR_' . $sgbdr;

        if (file_exists($chemin = $classe . '.php'))
        {
            require $chemin;
            return new $classe;
        }
        else
        {
            throw new RuntimeException('La classe <strong>' . $classe . '</strong> n\'a pu être trouvée !');
        }
    }
}

try
{
    $mysql = DBFactory::load('MySQL');
}
catch (RuntimeException $e)
{
    echo $e->getMessage();
}