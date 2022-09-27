<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medias/css/style.css">
    <link rel="stylesheet" href="medias/fontawesome/css/all.min.css">
    <title>Document</title>
</head>
<body>

<?php // si le formulaire est valider // DEBUT
if(isset($_POST['valider'])) {
?>
    <section>
        <form action="index.php" method="post">
        <h2>traitement de votre commande</h2>
        <button name="valider">
        <i class="fas fa-backward"></i>
        </button>
        </form>
       

<?php // on verifie la presence du nom // DEBUT
if(empty($_POST['nom'])) {
    echo '<p class="pointille red">merci de rentrer votre nom</p>';
} else {// on verifie la presence du nom // SUITE
?>

<div class="pizza">
Commande passé par <?= $_POST['nom']; ?>
</div>

<?php
} // on verifie la presence du nom // FIN
?>

<?php //si le formulaire est validé // suite
} else {
?>

<form action="index.php" method="post">
<h2 class="red">Une erreur est survenue</h2>
<button name="valider">
<i class="fas fa-backward"></i>
</button>
</form>

<?php
} // si le formulaire est valider // FIN
?>






       
    </section>
</body>
</html>