<?php

$servername = "mysql-shop";
$username = "root";
$password = "";
$db = "shopdb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
