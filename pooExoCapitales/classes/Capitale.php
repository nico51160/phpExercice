<?php
class Capitale {
    private $pays;
    private $capitale;

    public function __construct($pays, $capitale) {
        $this->setPays($pays);
        $this->setCapitale($capitale);
    }
    
    private function setPays($pays) {
        if(is_string($pays)) {
            $this->pays = $pays;
        }

    }

    private function setCapitale($capitale) {
        if(is_string($capitale)) {
            $this->capitale = $capitale;
        }        
    }

    public function getPays() {
        return $this->pays;
    }

    public function getCapitale() {
        return $this->capitale;
    }
    public function __toString() {
        $phrase = '<p>La ville de '.ucfirst($this->getCapitale()).' est la 
        capitale du pays '.ucfirst($this->getPays()).'.</p>';
        return $phrase;
    }
}