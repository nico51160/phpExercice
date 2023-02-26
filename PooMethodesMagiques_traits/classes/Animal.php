<?php
include_once('./traits/Commun.php');
include_once('./traits/Erreur.php');

class Animal {
    use Commun, Erreur;
    private $race;

    public function __construct() {
        echo 'Nouvel animal crée. <br>';
    }

    public function setRace($race) {
        $this->race = $race;
    }

    public function getRace() {
        return $this->race;
    }

   
}