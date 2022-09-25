<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name</title>
</head>
<body>
    <div>

<?php   
              
    if(isset($_POST['valider'])) {
?>
    
  <p><a href="index.php">Retour</a></p>  

  <?php
  if(empty($_POST['nom'])) {
    echo 'merci de remplir ton nom';

  } else {   
  
    if(strtolower($_POST['nom']) !== 'carl') {
        echo 'tu es un élève ';
     } else {
        echo 'tu es un formateur';
     }

  }




  ?>


<?php
     } else {             

?>

        <form action="" method="post">
             <label for="nom">quel est ton nom</label>
             <input type="text" name="nom" id="nom">
             <input type="submit" name="valider" value="Valider">

        </form>

<?php
}
?>
    </div>
</body>
</html>