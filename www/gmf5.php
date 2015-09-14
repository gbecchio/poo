<?php
class TestParent
{
    public function __construct()
    {
        static::qui();
    }
    public static function qui()
    {
        echo 'TestParent';
    }
}
class TestChild extends TestParent
{
    public function __construct()
    {
        static::qui();
    }
    public function test()
    {
        $o = new TestParent();
    }
    public static function qui()
    {
        echo 'TestChild';
    }
}
$o = new TestChild;
$o->test();