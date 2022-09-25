<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vote</title>
</head>
<body>
    <div>

    <?php // on verifie si le formulaire est validé
    if(isset($_POST['valider'])) {
       //instruction
     ?>
       <p><a href="index.php">Retour</a></p>

    <?php
       if(empty($_POST['age'])) {
        echo 'merci de donner ton age';
       } else {
          if( !(int)$_POST['age'] || ($_POST['age']) <= 0 ) {
              echo 'L\'age entré est incorrect';
          } elseif(ABS($_POST['age']) >= 18) {
              echo 'tu peux voter';
          } else {
              echo 'tu ne peux pas voter';
          }
       }  
    
    ?>
    
    <?php //si le formulaire n'est pas validé
    } else {
    ?>

        <form action="" method="post">
             <label for="age">quel est ton age</label>
             <input type="text" name="age" id="age">
             <input type="submit" name="valider" value="Valider">

        </form>
        
    
   
    <?php //si le formulaire n'est pas validé. FIN
    }
    ?>

</div>
</body>
</html>