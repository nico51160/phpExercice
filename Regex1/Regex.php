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

function immatriculation($plaque) {
    $regex = "#^[A-Za-z]{2}-[0-9]{3}-[A-Za-z]{2}$#";
    $result = preg_match($regex, $plaque);
    if($result) {
        $msg = "ceci est bien une plaque d'immatriculation";
    } else {
        $msg = "ceci n'est pas une plaque d'immatriculation";
    }

    return $msg;
}

$plaque = "ok-142-rt";

echo immatriculation($plaque);

?>




</body>
</html>