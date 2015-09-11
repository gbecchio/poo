<?php
error_reporting(-1);

ini_set('error_reporting', -1);

class PDOFactory
{
    public static function getMysqlConnexion()
    {
        $db = new PDO('mysql:host=localhost;dbname=poo', 'root', 'greg');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }

    public static function getPgsqlConnexion()
    {
        $db = new PDO('pgsql:host=localhost;dbname=poo', 'root', 'greg');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}

try
{
    $db = PDOFactory::getMysqlConnexion();
    $db2 = PDOFactory::getPgsqlConnexion();
}
catch(Exception $e)
{
    var_dump($e);
}

echo "<pre>";
var_dump($db);
echo "<br />";
// var_dump($db2);
echo "</ pre>";