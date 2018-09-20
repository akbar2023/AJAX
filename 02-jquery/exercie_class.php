<?php

class Vehicule {

    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    private $km;

    public function setMarque($arg) {
        if(is_string($arg) && strlen($arg) >= 3 && strlen($arg) <= 30) {
            return $this -> marque = $arg;
        }
    }

}
