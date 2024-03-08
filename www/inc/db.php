<?php
$dsn="mysql:dbname=devoir_1_penant;host=localhost;charset=utf8";

$username="root";
$password="";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch(Exception $erreur) {
    echo "<h1>Erreur de connexion</h1>";
    var_dump($erreur->getMessage());
    exit();
}
?>