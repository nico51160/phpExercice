<?php
include_once('./traits/Commun.php');
include_once('./traits/Erreur.php');
class Voiture {
    use Commun, Erreur;
    private $marque;

    public function __construct() {
        echo 'Nouvelle voiture créée. <br>';
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getMarque() {
        return $this->marque;
    }

 
}