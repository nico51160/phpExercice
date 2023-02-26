<?php
trait Erreur {
    public function __call($methodeName, $arguments) {
        echo '<p>La methode '.$methodeName.' est indisponible.
        <br> Les arguments passés à cette 
        méthode sont : '.implode(', ', $arguments).'</p>';

    }
}