<?php
include('_cnx.php');
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
    <title>POO</title>
</head>
<body>
    <?php
        $manager = new clientManager($cnx);
        $client = $manager->ReadClient(1);
        echo $client->getNom();
        echo '<br>';
        echo $client->getPrenom();
        echo '<br>';
        echo $client->getAge(); 
        echo '<br>';
        echo $client->getClientId(); 
        echo '<br>';

        $clients = $manager->ReadAllClient();
        foreach($clients as $client) {
            echo $client->getNom();
            echo '<br>';
            echo $client->getPrenom();
            echo '<br>';
            echo $client->getAge();
            echo '<br>';
            echo '<br>';

        }


    ?>
    
</body>
</html>