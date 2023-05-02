<?php

$servername = "localhost";
$username = "root";
$password = "Edu@2021";
$dbname = "prontuarioDigital";
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {

    die("Connection failed: " . $conexao->connect_error);

}

?>