<?php
include "connection.php";

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["mail"];
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO utente (username, password, nome, cognome, email) VALUES ('$username', '$password', '$nome', '$cognome','$email')";

try {
    $connection->query($sql) == TRUE;
    echo "<h1>Utente Aggiunto</h1>";   
    
} catch (\Throwable $th) {
    $_SESSION["errore"] = "Username già registrato";
    header("Location: errore_loginreg.php");
}