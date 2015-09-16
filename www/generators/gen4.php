<?php
function generator()
{
    for($i=0; $i<255;$i++)
    	{
		yield chr($i) => $i;
	}
    // On retourne ici des chaines de caractères assignées à des clés
    yield 'a' => 'Itération 1';
    yield 'b' => 'Itération 2';
    yield 'c' => 'Itération 3';
    yield 'd' => 'Itération 4';
}

foreach (generator() as $key => $val)
{
    echo $key, ' => ', $val, '<br />';
}
