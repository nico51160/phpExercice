<?php
class Femme extends Personne {
    public function __construct($prenom, $age) {
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setGenre('femme');       

    }

    private function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    private function setAge($age) {
        $this->age = $age;
    }

    private function setGenre($genre) {
        $this->genre = $genre;
    }   

    Public function Parler() {
        $msg = 'Bonjour, je m\'appelle '.$this->getPrenom().' et j\'ai '.$this->getAge().' ans et je suis du genre '.$this->getGenre();
        return $msg;
    }
}