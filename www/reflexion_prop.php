<?php
require_once __DIR__.'/../vendor/autoload.php';

error_reporting(-1);
ini_set('error_reporting', -1);

$attributMagie = new ReflectionProperty('Greg\Magicien', 'magie');

$classePersonnage = new ReflectionClass('Greg\Personnage');
$attributsPersonnage = $classePersonnage->getProperties();

$classeMagicien = new ReflectionClass('Greg\Magicien');
$magicien = new Greg\Magicien(['nom' => 'vyk12', 'type' => 'magicien']);

class A
{
    public static $attr = 'Hello world !';
}

$classeA = new ReflectionClass('A');

echo "<pre>";
echo $classeA->getProperty('attr')->getValue();
$classeA->setStaticPropertyValue('attr', "lut");
echo "<br />";
echo $classeA->getProperty('attr')->getValue();
echo "<br />";
foreach ($classeMagicien->getProperties() as $attribut)
{
    if ($attribut->isPrivate() || $attribut->isProtected())
    {
        $attribut->setAccessible(true);
    }
    $attribut->setValue($magicien, "tout");
    if ($attribut->isPrivate() || $attribut->isProtected())
    {
        $attribut->setAccessible(false);
    }
}
class B
{
    public static $attr1 = 'Hello world !';
    public static $attr2 = 'Bonjour le monde !';
}

$classeB = new ReflectionClass('B');

foreach ($classeB->getStaticProperties() as $attr)
{
    echo $attr;
}
var_dump($magicien);
echo "</ pre>";