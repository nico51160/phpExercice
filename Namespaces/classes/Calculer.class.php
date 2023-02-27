<?php
class Calculer {
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->setNombreA($a);
        $this->setNombreB($b);

    }

    public function setNombreA($a) {
        if(!is_numeric($a)) {
            echo 'merci de donner une valeur numérique au nombre A.';
        } else {
            $this->a = $a;
        }
    }

    public function setNombreB($b) {
        if(!is_numeric($b)) {
            echo 'merci de donner une valeur numérique au nombre B.';
        } else {
            $this->b = $b;
        }
    }

    public function Soustraire() {
        $calcul = $this->a - $this->b;
        return $calcul;
    }
}    
