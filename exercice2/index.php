<?php
require('fonction.capital.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Afficher la Capitale</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <h2>Entrer un pays</h2>
            <input type="text" name="pays" placeholder="pays">
            <input type="submit" name="valider" value="Connaitre sa Capitale">
        </form>

        <?php
        if(isset($_POST['valider'])){
            if(empty($_POST['pays'])) {
                echo '<p>Merci d\'indiquer un pays</p>';
            } 
            else {
               $ville = Capitale($_POST['pays']);
               if($ville === 0) {
                echo '<p>ce pays est inconnu de notre systeme</p>';
               } else {
                echo '<p>'.$ville.'</p>';
               }
               
            }
        }
        ?>

    </section>
</body>
</html>