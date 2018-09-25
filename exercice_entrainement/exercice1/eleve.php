<?php

require 'Etudiant.class.php';


$etudiant1 = new Etudiant;
// echo '<pre>';
// print_r($etudiant1);
// echo '</pre>';

$etudiant1 -> setPrenom('akbar');
$etudiant1 -> setNom('KHANA');
$etudiant1 -> setEmail('akhan2023@yahoo.com');
$etudiant1 -> setTelephone('0753175848');

echo '<pre>';
print_r($etudiant1 -> getInfos());
echo '</pre>';

$eleve = $etudiant1 -> getInfos();

foreach($eleve as $info) {
    echo $info . '<br>';
}


$jm = new Etudiant;
// echo '<pre>';
// print_r($jm);
// echo '</pre>';

$jm -> setPrenom('JeanMarc');
$jm -> setNom('Bonjour');
$jm -> setEmail('jmb2023@yahoo.com');
$jm -> setTelephone('0753175848');

echo '<pre>';
print_r($jm -> getInfos());
echo '</pre>';

$eleve = $jm -> getInfos();

foreach($eleve as $info) {
    echo $info . '<br>';
}
