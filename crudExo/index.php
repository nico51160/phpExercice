<?php
include('cnx/cnx.php');
spl_autoload_register( function($class){
    include('classes/'.$class.'.php');
});

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher la liste des clients</title>
    <link rel="stylesheet" href="medias/style.css">
</head>
<body>
    <div class="client">
        <h2>Acceuil</h2>
        <p><a href="creer-client.php">Creer un nouveau client</a></p>
    </div>
    <?php
        $manager = new ClientManager($cnx);
    ?>
</body>
</html>