<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGEX</title>
</head>
<body>

<?php
if(isset($_POST['tel'])) {
    $tel = $_POST['tel'];
    $regex  = "#^0[1-9]([-. ]?[0-9]{2}){4}$#";


    $result = preg_match($regex, $tel);
    if($result) {
        echo "Le tel est ok";
    } else {
        echo "Le tel n'est pas ok";

    }
}

?>

<form method="post" action="#">
    <input type="text" name="tel">
    <input type="submit">
</form>




</body>
</html>