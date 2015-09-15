<?php
error_reporting(-1);
ini_set('error_reporting', -1);


include_once __DIR__."/ErrorHandler.php";
include_once __DIR__."/MailSender.php";
include_once __DIR__."/BDDWriter.php";
include_once __DIR__."/design_pattern/factory/PDOFactory.php";



$o = new ErrorHandler; // Nous créons un nouveau gestionnaire d'erreur.
$db = PDOFactory::getMysqlConnexion();

$o->attach(new MailSender('gbecchio@yahoo.fr'))
  ->attach(new BDDWriter($db));

set_error_handler([$o, 'error']); // Ce sera par la méthode error() de la classe ErrorHandler que les erreurs doivent être traitées.

5 / 0; // Générons une erreur

echo "<pre>";

echo "</ pre>";