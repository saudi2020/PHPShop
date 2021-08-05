<?php

$servername = "mysql-shop";
$username = "myshopuser";
$password = "passw0rd";
$db = "shopdb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
