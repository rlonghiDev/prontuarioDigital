<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/

    $usuario = $_POST['txtUsuario'];
    $nomeUsuario = $_POST['txtNomeusuario'];
    $cpf = $_POST['txtCpf'];
    $senha = $_POST['txtSenha'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];

    require_once ('../bd/conexaoBD.php');

    $sql = "INSERT INTO usuario (usuario, nomeUsuario, cpf, senha, email, telefone) VALUES ('".$usuario."','".$nomeUsuario."','".$cpf."','".$senha."','".$email."','".$telefone."');";

    $conexao->query($sql);

    if($conexao->query($sql) === TRUE){
            
        echo '<a href="criaUsuario.php"><h1 class="w3-button w3-teal">Usuario Inserido com sucesso</h1></a>';
        }else{
        echo '<a href="userAdmin.php"><h1>class="w3-button w3-teal">Houve erro</h1></a>';
    }

    $conexao->close();



?>