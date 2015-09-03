<?php
error_reporting(-1);
ini_set('error_reporting', -1);

include_once __DIR__."/Ia.php";

interface Ic extends Ia
{
    public function methIc();
}