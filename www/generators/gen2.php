<?php
function generator()
{
    for ($i = 0; $i < 100; $i++)
    {
        yield 'Itération n°'.$i;
    }
}

foreach (generator() as $key => $val)
{
    echo $key, ' => ', $val, '<br />';
}
