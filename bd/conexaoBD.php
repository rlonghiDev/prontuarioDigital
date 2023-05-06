<?php

$servername = "localhost";
$username = "id20543955_equipetcc";
$password = "Etec@2023!maio";
$dbname = "id20543955_prontuariodigital";
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {

    die("Connection failed: " . $conexao->connect_error);

}

?>