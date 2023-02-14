<?php
include('classes/personne.php');
include('classes/femme.php');
include('classes/homme.php');
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet 3</title>
</head>
<body>
    <?php
        $personne1 = new femme('valerie', 30);
        echo $personne1->Parler();
        echo '<br><br>';
        $personne2 = new homme('jean', 150);
        echo $personne2->Parler();       




    ?>
</body>
</html>