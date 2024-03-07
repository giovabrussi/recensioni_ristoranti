<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cinema_finale";

$connection = new mysqli($servername, $user, $password, $dbname);

mysqli_report(MYSQLI_REPORT_OFF);