<?php
$servername = "localhost";
$username = "maslowski.it";
$password = "";
$dbname = "maslowski.it";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Blad polaczenia: " . $con->connect_error);
}
?>
