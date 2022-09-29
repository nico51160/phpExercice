<?php
require('_config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medias/css/style.css">
    <link rel="stylesheet" href="medias/fontawesome/css/all.min.css">
    <title>Passage de commande</title>
</head>
<body>
    <section>
        <form action="traitement.php" method="post">
            <h2>passage de commande</h2>

                <div class="champ">
                   <i class="fas fa-user"></i>
                   <input type="text" name="nom" placeholder="votre nom" value="<?php if(!empty($_POST['nom'])) {echo $_POST['nom'];} ?>">
                </div>

            <p>Nos pizzas</p>
            <div class="pizza">
                <div>
                   <input type="checkbox" name="pizzas[]" value="reine" id="pizza1">
                   <label for="pizza1"><strong>Reine</strong><span><?=PRIX_REINE;?>&euro;</span></label>
                </div>
                <div>
                   <input type="checkbox" name="pizzas[]" value="calzone" id="pizza2">
                   <label for="pizza2"><strong>Calzone</strong><span><?=PRIX_CALZONE;?>&euro;</span></label>
                </div>
            </div>

          
            <div class="pizza">
                <div>
                   <input type="checkbox" name="pizzas[]" value="reine" id="pizza3">
                   <label for="pizza3"><strong> Royal</strong><span><?=PRIX_ROYALE;?>&euro;</span></label>
                </div>
                <div>
                   <input type="checkbox" name="pizzas[]" value="calzone" id="pizza4">
                   <label for="pizza4"><strong>Orientalle </strong><span><?=PRIX_ORIENTAL;?>&euro;</span></label>
                </div>
            </div>

            <p class="pointille">valider votre commande</p>
            <button name="valider">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </section>
</body>
</html>