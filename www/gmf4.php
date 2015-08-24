<?php
class A
{
    public static function appelerQuiEstCe()
    {
        static::quiEstCe();
    }
    public function quiEstCe()
    {
        echo 'A';
    }
}
class B extends A
{
    public static function test()
    {
        // On appelle « appelerQuiEstCe » de la classe « A » normalement.
        A::appelerQuiEstCe();
    }
    public function quiEstCe()
    {
        echo 'B';
    }
}
class C extends B
{
    public function quiEstCe()
    {
        echo 'C';
    }
}
C::test();