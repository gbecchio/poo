<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MonSingleton
{
    protected function __construct()
    {
        return $this;
    }

    public static function init()
    {
        if (isset($this))
        {
            return $this;
        }
        else
        {
            return $this->__construct();
        }
    }
    function __clone()
    {
        return false;
    }
}
$monsingleton = MonSingleton::init();
var_dump($monsingleton);