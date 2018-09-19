<?php

// 02-jquery\exemple_insert_select\ajax.php


require 'connexion.php';

extract($_POST);

// $_POST = array(
//     'employe' => 'akbar'
// );

// extract() fait $employe = 'akbar'

$resultat = $pdo -> prepare("INSERT INTO employes (prenom) VALUES(:prenom)");

$resultat -> bindParam(':prenom', $prenom, PDO::PARAM_STR);

// ---------------

$resultat = $pdo -> query("SELECT * FROM employes");

$tab['resultat'] = '';

while($employes = $resultat -> fetch(PDO::FETCH_ASSOC) ) {
    $tab['resultat'] .= '<tr>';
    
    $tab['resultat'] .= '<td>' . $employes['id_employes'] . '</td>';
    $tab['resultat'] .= '<td>' . $employes['prenom'] . '</td>';
    
    $tab['resultat'] .= '</td>';

}