<?php
error_reporting(-1);
ini_set('error_reporting', -1);

function readLines($fileName)
{
    // Si le fichier est inexistant, on ne continue pas
    if (!$file = fopen($fileName, 'r'))
    {
        return;
    }

    // Tant qu'il reste des lignes à parcourir
    while (($line = fgets($file)) !== false)
    {
        // On dit à PHP que cette ligne du fichier fait office de « prochaine entrée du tableau »
        yield $line;
    }

    fclose($file);
}
$fileReader = readLines(__DIR__.'/MonTexte.txt');


foreach ($fileReader as $line)
{
    echo "<pre>";
    var_dump($fileReader);
    var_dump($line);
    echo "</ pre>";
}
var_dump($fileReader);