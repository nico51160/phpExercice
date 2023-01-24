<?php
include('classes/Pizzas.php');
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        Pizza::setEmballage(1);

        $calzone = new Pizza();
        $reine   = new Pizza();
        $royale  = new Pizza();

        $calzone->setNom('calzone');
        $reine->setNom('reine');
        $royale->setNom('royale');

        $calzone->setPrix(10);
        $reine->setPrix(13);
        $royale->setPrix(15);

        // coté client
        $calzone->setQuantite(3);
       // echo $calzone->Calcul();
       
    ?>

    <form action="" method="post">
        <select name="pizzaListe">
            <option value="<?=$calzone->getNom()?>"><?=$calzone->getNom()?>: <?=$calzone->getPrix()?> euros</option>
            <option value="<?=$reine->getNom()?>"><?=$reine->getNom()?>: <?=$reine->getPrix()?> euros</option>
            <option value="<?=$royale->getNom()?>"><?=$royale->getNom()?>: <?=$royale->getPrix()?> euros</option>
        </select>
        <input type="number" name="qt" placeholder="Quantité">
        <input type="submit" name="commander" value="Commander">

    </form>

<?php
if(isset($_POST['commander'])) {

    $quantite =$_POST['qt'];
    $pizza    = $_POST['pizzaListe'];

    $$pizza->setQuantite($quantite);
    $calcul = $$pizza->Calcul();



}

?>
    
</body>
</html>