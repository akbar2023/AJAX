<?php
require 'connexion.php';

extract($_POST);

// $_POST = array(
//     'employe' => 'akbar'
// );

// extract() fait $employe = 'akbar'

$resultat = $pdo -> prepare("INSERT INTO employes (prenom) VALUES(:prenom)");

$resultat -> bindParam(':prenom', $employe, PDO::PARAM_STR);

if($resultat -> execute()){
    echo 'OK';
} else {
    echo 'Erreur';
}