<?php
session_start();
include "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT username, password FROM utente";

$result = $connection->query($sql);

$count = 0;

while($row = $result->fetch_assoc()) {
    if ($username == $row["username"]) {
        if ($password == $row["password"]) {
            $_SESSION["username"] = $username;
            header("Location: benvenuto.php");
        } else {
            $_SESSION["errore"] = "Password sbagliata";
            header("Location: errore_loginreg.php");
        }
        $count ++;
    }
}
if ($count == 0) {
    $_SESSION["errore"] = "Utente non registrato";
    header("Location: errore_loginreg.php");
}