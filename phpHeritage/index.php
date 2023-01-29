<?php
include('classes/pizza.php');
include('classes/PizzaPromo.php');
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
    <h1>Pizzas</h1>

    <?php
    pizza::setEmballage(2);
    PizzaPromo::setRemise(5);
    
    $pizza1 = new Pizza('reine', 10);
    echo $pizza1->getNom().': '.$pizza1->getTarif();

    echo '<br><br>';

    $pizzaPromo1 = new PizzaPromo('royale', 12);
    echo $pizzaPromo1->getNom().': '.$pizzaPromo1->getTarif();


    ?>



</body>
</html>