<?php
error_reporting(-1);
ini_set('error_reporting', -1);
$data = $_GET['data'];
$t = unserialize(urldecode($data));
echo "<pre>";
var_dump($t);
echo '<br />';
echo "</ pre>";
