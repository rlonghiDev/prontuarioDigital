<?php
$servername = "localhost";
$username = "root";
$password = "Edu@2021";
$dbname = "appLogin";
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
die("Connection failed: " . $conexao->connect_error);
}
?>