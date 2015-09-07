<?php
error_reporting(-1);
ini_set('error_reporting', -1);

trait MonTrait
{
    public function hello()
    {
        echo 'Hello world !';
    }
}

class A
{
    use MonTrait;
}

class B
{
    use MonTrait;
}

$a = new A();
$b = new B();

echo "<pre>";
echo '<=class a.' . $a->hello();
echo "<br />";
echo '<=class b.' . $b->hello();
echo "</ pre>";