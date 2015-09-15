<?php
error_reporting(-1);
ini_set('error_reporting', -1);

class XmlFormater implements Formater
{
  public function format($text)
  {
    return '<?xml version="1.0" encoding="ISO-8859-1"?>' ."\n".
           '<message>' ."\n".
           "\t". '<date>' . time() . '</date>' ."\n".
           "\t". '<texte>' . $text . '</texte>' ."\n".
           '</message>';
  }
}