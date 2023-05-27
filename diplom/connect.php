<?php 
$servername = "localhost";
$database = "database.sql";
$username = "root";
$password = "";

$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>