<?php
class Mere
{
    public static function lancerLeTest()
    {
        self::quiEstCe();
    }
    public function quiEstCe()
    {
        echo 'Je suis la classe <strong>Mere</strong> !';
    }
}

class Enfant extends Mere
{
    public function quiEstCe()
    {
        echo 'Je suis la classe <strong>Enfant</strong> !';
    }
}
Enfant::lancerLeTest();