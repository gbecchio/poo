<?php
error_reporting(-1);
ini_set('error_reporting', -1);


trait HtmlFormater
{
    public function format($text)
    {
        return '<p>Date : '.date('d/m/Y').'</p>'."\n".
        '<p>'.nl2br($text).'</p>';
    }
}

echo "<pre>";
echo "</ pre>";