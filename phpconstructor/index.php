<?php
include('classes/Boulangerie.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $croissant      = new Boulangerie('croissant', 0.8);
        $painAuChocolat = new Boulangerie('pain au chocolat', 1);
        $baguette       = new Boulangerie('baguette', 1.2);

        echo $croissant->getProduit().': '.$croissant->getTarif().'euros';
        echo '<br>';
        echo $painAuChocolat->getProduit().': '.$painAuChocolat->getTarif().'euros';
        echo '<br>';
        echo $baguette->getProduit().': '.$baguette->getTarif().'euros';

        $TarifCroissant      = $croissant->getTarif();
        $TarifpainAuChocolat = $painAuChocolat->getTarif();
        $Tarifbaguette       = $baguette->getTarif();
        echo '<br>';
        echo '<br>';

        echo  'Total à payer: '.($TarifCroissant + $Tarifbaguette).' euros';
        echo '<br>';
        Boulangerie::setTirelire(0.5);
        echo 'Tirelire: '.Boulangerie::getTirelire().' euros';


    ?>
</body>
</html>