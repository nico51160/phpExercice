<?php
//spl_autoload_register(function($class) {
 //   include('classes/'.$class.'.php');
//});

include('classes/Calculer.php');
include('classes/Calculer.class.php');



?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer</title>
</head>
<body>

<?php
if(isset($_POST['calculer'])) {

    //use carl\Calculer;

    $a = $_POST['a'];
    $b = $_POST['b'];
    $Calculer = new carl\Calculer($a, $b);
    echo $Calculer->Calculer();
}
?>
    <form action="" method="post">
        <h2>Addiction</h2>
        <div>
            <input type="number" name="a" placeholder="Entrer le nombre A">
        </div>

        <div>
            <input type="number" name="b" placeholder="Entrer le nombre B">
        </div>  

        <div>
            <input type="submit" name="calculer" value="calculer">
        </div>        

    </form>

    <hr>

    <?php
if(isset($_POST['soustraire'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $Calculer = new Calculer($a, $b);
    echo $Calculer->Soustraire();
}
?>

    <form action="" method="post">
        <h2>Soustraction</h2>
        <div>
            <input type="number" name="a" placeholder="Entrer le nombre A">
        </div>

        <div>
            <input type="number" name="b" placeholder="Entrer le nombre B">
        </div>  

        <div>
            <input type="submit" name="soustraire" value="calculer">
        </div>        

    </form>
</body>
</html>