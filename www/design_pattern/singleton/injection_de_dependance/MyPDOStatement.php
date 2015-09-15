<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class MyPDOStatement implements IResult
{
    protected $st;

    public function __construct(PDOStatement $st)
    {
        $this->st = $st;
    }

    public function fetchAssoc()
    {
        return $this->st->fetch(PDO::FETCH_ASSOC);
    }
}