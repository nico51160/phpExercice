<?php
class Boulangerie {
    private $produit;
    private $tarif;
    const TVA = 1.2;
    private static $tirelire;

    public function __construct($nom, $prix) {
       $this->setProduit($nom);
       $this->setTarif($prix);
    }

    private function setProduit($nom) {
       $this->produit = $nom;
    }

    private function setTarif($prix) {
        if(!is_numeric($prix)) {
            echo 'Erreur de prix !';
        } else {
            $this->tarif = $prix * self::TVA;
        }
     }
     
    public static function setTirelire($depot) {
        if(!is_numeric($depot)) {
            echo 'Erreur de prix !';
        } else {
            self::$tirelire = $depot;
        }
    }

    public static function getTirelire() {
        return self::$tirelire;
    }

    public function getProduit() {
        return $this->produit;
    }

    public function getTarif() {
        return $this->tarif;
    }
}