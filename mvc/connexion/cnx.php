<?php
$dsn  = 'mysql:host=localhost;dbname=mvc;charset=utf8';
$user = 'root';
$pass = '';

try {
    $cnx = new PDO($dsn,$user,$pass);
} catch(PDOException $e) {
    echo 'Un probleme est survenu !';
}

   