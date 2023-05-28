<?php
$dsn = 'mysql:host=localhost;dbname=crud;charset=utf8';
$user= 'root';
$pass= '';

try {
    $cnx = new PDO($dsn, $user, $pass);
} catch(PDOExecption $e) {
    echo 'une erreur est survenue !';
}
