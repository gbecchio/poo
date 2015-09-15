<?php
error_reporting(-1);

ini_set('error_reporting', -1);

class Observer2 implements SplObserver
{
    public function update(SplSubject $obj)
    {
        echo __CLASS__, ' a été notifié ! Nouvelle valeur de l\'attribut <strong>nom</strong> : ', $obj->getNom();
    }
}

try
{
}
catch(Exception $e)
{
}

echo "<pre>";
echo "<br />";
echo "</ pre>";