<?php 
include('_config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Commander</title>
</head>
<body>
       <div>
        <form action="traitement.php" method="POST">
            <label for="quantité">Quantité :</label>
            <select name="quantite" id="quatite">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <p>Tarif: <?= TARIF; ?> </p>
            <p><span class="orangered">En commandant maintenant, vous aurez le droit 
                à une remise immediate de <?= REMISE; ?> euros.</span></p>
                <p>
                    <input type="submit">
                </p>
          

        </form>
    </div>
    
</body>
</html>