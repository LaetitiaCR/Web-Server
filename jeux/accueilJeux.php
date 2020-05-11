<?php
include "Personnage.php";
include "InsertPersonnage.php";
include "UpdatePersonnage.php";


//$perso = new Personnage(16, 'Vyk12', 55);
//

$dsn = 'mysql:dbname=jeux;host=127.0.0.1;port=3308;charset=utf8';
 
$user = 'Laetitia';
$password = 'admin';
$bdd = new PDO($dsn, $user, $password);


/*
$perso = new Personnage([
  'id' => 16,
  'nom' => 'Vyk12',
  'degats' => 55
]);
*/
//$addPersonnage = new InsertPersonnage($bdd);
//$perso = new Personnage(8, 'PO65', 25);
//$addPersonnage->addPersonnage($perso);




$updatePersonnage = new updatePersonnage($bdd);
$perso = new Personnage(8, 'Ppp2', 15);
$updatePersonnage->modifiePersonnage($perso);



?>