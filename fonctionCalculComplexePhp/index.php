<?php

const TVA = 0.2;

function calculerTarif($tarif=10, $qt=1) {
    if(   (is_int($tarif)) && (is_int($qt))   ) {
    $totalHT  = $tarif * $qt;
    $totalTTC = $totalHT * TVA;
    $totalTTC = $totalHT + $totalTTC;
    return  $totalTTC;
  } else {
    $erreur = 'vous devez rentrer des chiffres';
    return $erreur;
  }


};

$A_Payer = calculerTarif();

echo $A_Payer;