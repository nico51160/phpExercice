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
if(isset($_POST['Email'])) {
    $Email = $_POST['Email'];
    $regex  = "#^[a-zA-Z0-9_.-]+@[a-zA-Z0-9_.-]+\.[a-zA-Z]{2,4}$#";


    $result = preg_match($regex, $Email);
    if($result) {
        echo "Le email est ok";
    } else {
        echo "Le email n'est pas ok";

    }
}

?>

<form method="post" action="#">
    <input type="text" name="Email"/>
    <input type="submit"/>
</form>




</body>
</html>