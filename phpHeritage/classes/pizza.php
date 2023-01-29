<?php

class Pizza {
    protected $tarif;
    private $nom;
    private static $emballage = 1;
    const MONNAIE = ' Euros';

    public function __construct($nom, $prix) {
        $this->setNom($nom);
        $this->setTarif($prix);
    }

    public static function setEmballage($emballage) {
        self::$emballage = $emballage;
    }

    private function setNom($nom) {
        $this->nom = $nom;
    }

    private function setTarif($prix) {
        if(!is_numeric($prix)) {
            echo 'Tarif incorrect !';
        } else {
            $this->tarif = $prix + self::$emballage;
        }
        
    }

    public function getNom() {
        return $this->nom;
    }

    public function getTarif() {
        return $this->tarif .self::MONNAIE;
    }
}