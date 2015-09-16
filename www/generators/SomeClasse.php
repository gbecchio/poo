<?php
class SomeClasse
{
    protected $attr;

    public function __construct()
    {
        $this->attr = ['Un', 'Deux', 'Trois', 'Quatre'];
    }

    public function &generator()
    {
        foreach ($this->attr as &$val)
        {
            yield $val;
        }
    }
    public function attr()
    {
         return $this->attr;
    }
}
$sc = new SomeClasse();
foreach($sc->generator() as $key=>&$val)
{
	echo $key.'=>'.strrev($val)."\n\r";
        $val = strrev($val);
}
var_dump($sc->attr());
var_dump($sc);
