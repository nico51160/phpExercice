<?php
include('classes/Chien.php');
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet 1</title>
</head>

<body>
    <?php 
    $chien1 = new Chien();
    $chien2 = new Chien();  

    //affectation des valeurs du chien1
    $chien1->setRace('Berger Allemand');
    $chien1->setNom('Naya');
    $chien1->setAge(6);

    $chien2->setRace('dobermann');
    $chien2->setNom('luna');
    $chien2->setAge(2);

    //affichage des valeurs du chien1
   
    echo $chien1->getRace();
    echo '<br>';
    echo $chien1->getNom();
    echo '<br>';
    echo $chien1->getAge();

    echo '<br> <br>';


    echo $chien2->getRace();
    echo '<br>';
    echo $chien2->getNom();
    echo '<br>';
    echo $chien2->getAge();   

    //appel de la methode aboyer
    echo '<br><br>';
    echo $chien1->aboyer();

    echo '<br><br>';
    echo $chien2->aboyer();

    // appel metode info();
    echo '<br><br>';
    echo $chien1->infos();

    echo '<br><br>';
    echo $chien2->infos();


    ?>

    

</body>
</html>