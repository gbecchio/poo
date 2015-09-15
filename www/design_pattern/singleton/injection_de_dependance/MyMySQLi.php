<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MyMySQLi extends MySQLi implements IDB
{
    public function query($query)
    {
        return new MyMySQLiResult(parent::query($query));
    }
}