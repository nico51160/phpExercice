<?php
abstract class Personne {
    protected $prenom;
    protected $age;
    protected $genre;

    protected function getPrenom() {
        return $this->prenom;
    }

    protected function getAge() {
        return $this->age;
    } 
    
    protected function getGenre() {
        return $this->genre;
    }  

    abstract protected function Parler();
}