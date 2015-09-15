<?php
error_reporting(-1);
ini_set('error_reporting', -1);
class Gedeon
{
    private $a = "10";
    function rable($a)
    {
        echo $a;
    }
}
$notes = array(7,3,8,9); // Formation d'un array pour la forme
$notes = array('maths'=>7,'anglais'=>3,'svt'=>8,'algo'=>9);
$bb = serialize($notes);
$entier = 17;
$bool = TRUE;
$float = 0.75669;
$chaine = "ma chaine";
$array = array(0,4,7,3);
$array2 = array('truc'=>'machin', 'chose'=>8, 9=>'youpie');
$temp = 'a:5:{s:5:"maths";i:7;s:7:"anglais";i:3;s:3:"svt";i:8;s:4:"algo";i:9;s:4:"greg";i:42;}';
$a = unserialize($temp);
$ts = new stdClass();
$ts->a = 10;
$ts->d = 'rien';
$ged = new Gedeon();
$serGed = serialize($ged);
$objStr = 'O:6:"Gedeon":1:{s:7:"Gedeona";s:5:"10000";}';
$obj = unserialize($objStr);
$objSer = serialize($obj);
echo "<pre>";
// echo serialize($notes); // echo du résultat de serialize() sur cet array
// print_r($bb);
// var_dump($a);
// var_dump($temp);
echo serialize($entier);
echo '<br />';
echo serialize($bool);
echo '<br />';
echo serialize($float);
echo '<br />';
echo serialize($chaine);
echo '<br />';
echo serialize($array);
echo '<br />';
echo serialize($array2);
echo '<br />';
echo serialize($ts);
echo '<br />';
var_dump($serGed);
echo '<br />';
var_dump($obj);
echo '<br />';
var_dump($objSer);
echo "</ pre>";
