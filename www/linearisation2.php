<?php
error_reporting(-1);
ini_set('error_reporting', -1);
$a = [
    'a',
    'b',
    'c',
    'greg' => [
        'nom'=>'Becchio',
        'prenom'=>'Grégory',
        'adresse'=> [
            'addr' => '9 rue claude debussy',
            'ville'=>'Rueil-malmaison',
            'pays'=> 'France'
        ]
    ]
];
$srzed = serialize($a);
header("Location:linearisation3.php?data=".$srzed); // Une simple redirection, mais avec des données GET.
exit;
$fh = fopen('test.txt','a+'); // Ouverture d'un fichier en lecture/écriture, en le créant s'il n'existe pas.
fwrite($fh, $srzed); // On écrit.
fclose($fh); // On ferme.
echo "<pre>";
var_dump($srzed);
echo '<br />';
echo "</ pre>";
