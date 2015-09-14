<?php
error_reporting(-1);
ini_set('error_reporting', -1);

include_once __DIR__."/Ia.php";
include_once __DIR__."/Ib.php";
include_once __DIR__."/Ic.php";

class ImplI implements Ia, Ib, Ic
{
    public function methIa()
    {
        echo "methIa()";
    }
    public function methIb()
    {
        echo "methIb()";
    }
    public function methIc()
    {
        echo "methIc()";
    }
}
$implI = new ImplI();
$implI->methIa();
$implI->methIb();
$implI->methIc();