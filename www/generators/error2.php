<?php
error_reporting(-1);
ini_set('error_reporting', -1);

function generator()
{
    // On fait une boucle de 5 yield pour garder quelque chose de simple
    for ($i = 0; $i < 5; ++$i)
    {
        // On indique qu’on vient de rentrer dans la ième itération
        echo "Début $i<br />";

        // On essaye « d’attraper » la valeur qu’on nous a donnée
        try
        {
            yield;
        }
        catch (Exception $e)
        {
            // Si une exception a été levée, on indique son numéro
            echo "Exception $i<br />";
        }

        // Enfin, on indique qu’on vient de finir la ième itération
        echo "Fin $i<br />";
    }
}

$gen = generator();

foreach ($gen as $i => $val)
{
    // On décide de lancer une exception pour l’itération n°3
    if ($i == 3)
    {
        $gen->throw(new Exception('Petit test'));
    }
}