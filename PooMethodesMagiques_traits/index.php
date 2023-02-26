<?php
spl_autoload_register(function($class) {
    include('classes/'.$class.'.php');
});
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet 1</title>
</head>
<body>
    <?php
        $chien = new Animal();
        $chien->setRace('chien');
        $chien->setMarque('rex');
        echo $chien->getRace();
        echo '<br>';
        echo $chien->getNom();
        echo '<br><br>';
        $mustang = new Voiture();
        $mustang->setMarque('Ford');
        $mustang->setNom('Mustang');        
        echo $mustang->getmarque();
        echo '<br>';
        echo $mustang->getNom();




    ?>
</body>
</html>