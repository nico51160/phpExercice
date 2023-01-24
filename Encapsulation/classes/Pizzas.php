<?php
class Pizza {
    private $nom;
    private $prix;
    private $quantite;
    private static $emballage;


    public function setNom($nomPizza) {
        $this->nom = $nomPizza;
    }
 
    public function setPrix($prixPizza) {
        if(!is_numeric($prixPizza)) {
            echo 'prix incorrecte';
        } else {
            $this->prix = ABS($prixPizza);
        }
        
    }

    public function setQuantite($quantitePizza) {
        if(!is_int($quantitePizza)) {
            echo 'Quantité incorrecte';
        } else {
            $this->quantite = ABS($quantitePizza);
        }
    }

    public static function setEmballage($frais) {
        if(!is_numeric($frais)) {
            echo 'Frais incorrecte';
        } else {
            self::$emballage = ABS($frais);
        }  
    }

    public function getNom() {
        return $this->nom;

    }

    public function getprix() {
        return $this->prix;

    }

    public function getQuantite() {
        return $this->quantite;

    }

    public static function getEmballage() {
        return self::$emballage;
    }

    public function Calcul() {
        if(!empty($this->prix) && !empty($this->quantite)) {
            $calcul = ($this->prix * $this->quantite) + self::getEmballage();
            return $calcul;
        }

    }
}


