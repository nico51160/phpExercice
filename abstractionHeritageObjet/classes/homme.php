<?php
class Homme extends Personne {
    public function __construct($prenom, $age) {
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setGenre('homme');    
    }

    private function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    private function setAge($age) {
        if(!is_numeric($age)) {
            echo 'age incorrect';
        } else {
            $this->age = $age;        
        }

    }

    private function setGenre($genre) {
        $this->genre = $genre;
    }   

    public function Parler() {
        $msg = 'Mon prenom est '.$this->getPrenom().' et mon age est '.$this->getAge().' an. Je suis un '.$this->getGenre();
        return $msg;        
    }
}