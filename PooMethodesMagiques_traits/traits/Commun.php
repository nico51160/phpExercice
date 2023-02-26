<?php

trait Commun {
    private $nom;

    public function setNom($nom) {
        $this->nom = $nom;
    } 

    public function getNom() {
        return $this->nom;
    }  
}