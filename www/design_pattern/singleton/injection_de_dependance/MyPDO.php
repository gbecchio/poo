<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MyPDO extends PDO implements IDB
{
    public function query($query)
    {
        return new MyPDOStatement(parent::query($query));
    }
}