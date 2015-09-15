<?php
error_reporting(-1);
ini_set('error_reporting', -1);

function autoload($class)
{
    if (file_exists($path = __DIR__.'/'.$class.'.php'))
    {
        require $path;
    }
}

spl_autoload_register('autoload');

$dao = new MyPDO('mysql:host=localhost;dbname=news', 'root', 'greg');
$manager = new NewsManager($dao);

$dao2 = new MyMySQLi('localhost', 'root', 'greg', 'news');
$manager2 = new NewsManager($dao2);

echo "<pre>";
print_r($manager->get(1));
echo "<br />";
print_r($manager2->get(1));
echo "</ pre>";