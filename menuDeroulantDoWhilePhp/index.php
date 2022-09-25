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


        <form action="" method="post">
             <label for="age">quel est ton age ?</label>
             <select name="age" id="age">

<?php

      $i = 10;
      do {
?>
        <option value="<?= $i; ?>"><?= $i; ?></option>


<?php
      $i++;
     
      } while($i <= 150);
?>              

             </select>
             <input type="submit" name="valider" value="Valider">

        </form>


    </div>
</body>
</html>