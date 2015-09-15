<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class DBFactory
{
    public static function getMysqlConnexionWithPDO()
    {
        $db = new PDO('mysql:host=localhost;dbname=news', 'root', 'greg');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }

    public static function getMysqlConnexionWithMySQLi()
    {
        return new MySQLi('localhost', 'root', 'greg', 'news');
    }
}