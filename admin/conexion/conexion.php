<?php
$hostname = "localhost";
$database = "cabellosdb";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>