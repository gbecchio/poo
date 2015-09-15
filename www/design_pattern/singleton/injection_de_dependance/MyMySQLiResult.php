<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MyMySQLiResult implements IResult
{
    protected $st;

    public function __construct(MySQLi_Result $st)
    {
        $this->st = $st;
    }

    public function fetchAssoc()
    {
        return $this->st->fetch_assoc();
    }
}