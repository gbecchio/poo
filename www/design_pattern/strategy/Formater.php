<?php
error_reporting(-1);
ini_set('error_reporting', -1);

interface Formater
{
    public function format($text);
}