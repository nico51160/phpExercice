<?php
class Chien {
    private $race;
    private $nom;
    private $age;

    public function setRace($race) {
        $this->race = $race;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setAge($age) {
        if(!is_numeric($age) || $age <= 0) {
            echo 'age incorrect !';
        } else {
            $this->age = $age;
        }
       
    }

    public function getRace() {
        return $this->race;
    }

    public function getNom() {
        return $this->nom;
    }   

    public function getAge() {
        return $this->age;
    }      

    public function aboyer() {
        $msg = $this->nom.' est en train d\'aboyer';
        return $msg;
    } 
    
    public function infos() {
        $msg = $this->nom.' est un '.$this->race.' qui a '.$this->age.' ans.';
        return $msg;
    }
}