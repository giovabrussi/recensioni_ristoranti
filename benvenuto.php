<?php
session_start();
$username = $_SESSION['username'];
echo "<h1>Benvenuto $username</h1>";