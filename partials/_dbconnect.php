<?php
$server = "localhost";
$name = "root";
$password = "";
$database = "sing";

$conn = mysqli_connect($server, $name, $password, $database) or die(mysqli_connect_error()."database connection");
?>
