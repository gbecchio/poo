<?php
error_reporting(-1);
ini_set('error_reporting', -1);

interface Imovable
{
    const MA_CONSTANTE = "vitesse constants";
    public function move($dest);
}