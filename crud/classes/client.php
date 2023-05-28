<?php
class client {
    private $clientID;
    private $nom;
    private $prenom;
    private $age;

    public function getClientID() {
        return $this->clientID;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getAge() {
        return $this->age;
    }

    public function setClientId($id) {
            $this->clientID = $id;
    }
    public function setNom($nom) {
        if(is_string($nom)) {
            $this->nom = $nom;
        }
    }
    public function setPrenom($prenom) {
        if(is_string($prenom)) {
            $this->prenom = $prenom;
        }
    }
    public function setAge($Age) { 
            $this->age = $Age;
    }
}
