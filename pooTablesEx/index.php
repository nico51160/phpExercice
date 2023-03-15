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
    <link rel="stylesheet" href="style.css">

    <title>Tableau</title>
</head>
<body>
    <?php 

        //Instanciation Objets (parties du tableau) -->

        $nom = new Tableau();
        $nom->setEntete('Nom');
        $prenom = new Tableau();
        $prenom->setEntete('Prenom');
        $age = new Tableau();
        $age->setEntete('age', 'cacher');
        $caption = new Tableau();
        $caption->setCaption('Liste des clients');

        $nom1 = new Tableau();
        $nom1->setdonnees('Dupond','',2);
        $prenom1 = new Tableau();
        $prenom1->setdonnees('Jean');
        $age1 = new Tableau();
        $age1->setdonnees(45, 'cacher');

        $prenom2 = new Tableau();
        $prenom2->setdonnees('Isabelle');
        $age2 = new Tableau();
        $age2->setdonnees(45, 'cacher');

        $nom3 = new Tableau();
        $nom3->setdonnees('Dupuis Giles','','',2);
        $age3 = new Tableau();
        $age3->setdonnees(30, 'cacher');

        //Fin d'instanciation -->

        //tableau debut -->

        echo Tableau::DEBUT_TABLE;
        echo $caption->getCaption();
        
        echo Tableau::DEBUT_TR;
        echo $nom->getEntete();
        echo $prenom->getEntete();
        echo $age->getEntete();
        echo Tableau::FIN_TR;

        echo Tableau::DEBUT_TR;
        echo $nom1->getdonnees();
        echo $prenom1->getdonnees();
        echo $age1->getdonnees();
        echo Tableau::FIN_TR;

        echo Tableau::DEBUT_TR;
        echo $prenom2->getdonnees();
        echo $age2->getdonnees();
        echo Tableau::FIN_TR;

        echo Tableau::DEBUT_TR;
        echo $nom3->getdonnees();
        echo $age3->getdonnees();
        echo Tableau::FIN_TR;



        echo Tableau::FIN_TABLE;

        // Tableau fin -->
    ?>
    
</body>
</html>