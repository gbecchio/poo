<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
class A
{
    public static function quiEstCe()
    {
        echo 'A';
    }
}
class B extends A
{
    public static function test()
    {
        parent::quiEstCe();
    }
    public static function quiEstCe()
    {
        echo 'B';
    }
}
class C extends B
{
    public static function quiEstCe()
    {
        echo 'C';
    }
}
C::test();