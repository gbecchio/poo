<?php
error_reporting(-1);
ini_set('error_reporting', -1);

include_once __DIR__."/Ia";
include_once __DIR__."/Ib";
include_once __DIR__."/Ic";

class implI implements Ia, Ib, Ic
{
}