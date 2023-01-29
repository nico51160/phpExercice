<?php
class PizzaPromo extends Pizza {
    private static $remise = 2;

    public function getTarif() {
        return $this->tarif = ($this->tarif - self::$remise) .self::MONNAIE;
    }

    public static function setRemise($remise) {
        self::$remise = $remise;
    }
}