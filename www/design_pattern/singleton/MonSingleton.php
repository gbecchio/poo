<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MonSingleton
{
    private static $ceci;
    
    protected function __construct()
    {
    }

    public static function init()
    {
        if (isset(self::$ceci))
        {
            return self::$ceci;
        }
        else
        {
            self::$ceci = new self;
            return self::$ceci;
        }
    }
    function __clone()
    {
    }
}
$monsingleton = MonSingleton::init();
var_dump($monsingleton);
$monsingleton2 = MonSingleton::init();
var_dump($monsingleton2);
var_dump($monsingleton2 === $monsingleton);
