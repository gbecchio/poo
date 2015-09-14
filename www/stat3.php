<?php
class Mere
{
    public function lancerLeTest()
    {
        static::quiEstCe();
    }
    public function quiEstCe()
    {
        echo 'Je suis la classe « Mere » !';
    }
}
class Enfant extends Mere
{
    public function quiEstCe()
    {
        echo 'Je suis la classe « Enfant » !';
    }
}
$e = new Enfant;
$e->lancerLeTest();