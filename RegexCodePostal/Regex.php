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

$cp = $_POST['cp'];
$regex = "#^[0-9]{5}$#";
$result = preg_match($regex, $cp);

if($result) {
    echo "ceci est bien un code postal";
} else {
    echo "ceci n est pas un code postal";
}
?>

<form method="post" action="#">
    <input type="text" name="cp"/>
    <input type="submit"/>
</form>




</body>
</html>