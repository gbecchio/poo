<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class HTMLFormater implements Formater
{
    public function format($text)
    {
        return '<p>Date : ' . time() . '<br />' ."\n". 'Texte : ' . $text . '</p>';
    }
}