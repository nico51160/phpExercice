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
if(isset($_POST['url'])) {
    $url = $_POST['url'];
    $regex  = "#^https?://([wW]{3}\.)?[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$#";


    $result = preg_match($regex, $url);
    if($result) {
        echo "L url est ok";
    } else {
        echo "L url n'est pas ok";

    }
}

?>

<form method="post" action="#">
    <input type="text" name="url"/>
    <input type="submit"/>
</form>




</body>
</html>