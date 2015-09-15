<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MyPDO
{
    private static $ceci;
    private $dao;
    private function __construct()
    {}

    private function __clone()
    {}

    public static function init()
    {
        if (!isset(self::$ceci))
        {
            self::$ceci = new self;
        }
        return self::$ceci;
    }

    public function setDao()
    {
        $this->dao = new PDO('mysql:host=localhost;dbname=news', 'root', 'greg');
        return $this;
    }
    public function getDao()
    {
        return $this->dao;
    }

    public function query($query)
    {
        return $this->dao->query($query);
    }
}