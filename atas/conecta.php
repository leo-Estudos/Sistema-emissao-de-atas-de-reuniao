<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "atas";
$mysqli = mysqli_connect($hostname, $username, $password, $database);
if (!$mysqli) {
    die("Falha na conexão:" . mysqli_connect_error());
}
?>