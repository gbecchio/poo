<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class TextFormater implements Formater
{
      public function format($text)
      {
           return 'Date : ' . time() . "\n" . 'Texte : ' . $text;
      }
}