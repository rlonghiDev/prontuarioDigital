<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/

/* Informa o nível dos erros que serão exibidos */
error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);

    $usuario = $_POST['txtUsuarioLogin'];
    $nomeUsuario = $_POST['txtNomeUsuario'];
    $senha = $_POST['txtSenha'];
    //nivelAcesso - Capturado pelo tipo de cargo selecionado
    //situação - sempre -> ativo
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $cpf = $_POST['txtCpf'];
    $tipoUsuario = $_POST['txtTipoUsuario'];

    require_once ('../bd/conexaoBD.php');

    //Evita duplicidade de nome para Login -> O nome da pessoa não será verificado...
    $sqlUsuario = "SELECT usuario FROM usuario WHERE usuario = '".$usuario."';";
    $resultadoUsuarioR = $conexao -> query ($sqlUsuario);
    $usuarioExiste = mysqli_fetch_array($resultadoUsuarioR);

    if($usuarioExiste != null){

        echo '<a href="/prontuarioDigital//administracao/criaUsuario.php"><h1 class="w3-button w3-teal">Usuario já existe no sistema por favor escolha outro apelido</h1></a>';

    }else{
        //Busca tipo de usuário de acordo com o cargo
        $sqlTipoUsuario = "SELECT * FROM tipoUsuario WHERE cargoUsuario = '".$tipoUsuario."';";
        $resultadoTipoUsuario = $conexao -> query ($sqlTipoUsuario);
        $tipoUsuarioConfigurado = mysqli_fetch_array($resultadoTipoUsuario);

        $nivelAcesso = $tipoUsuarioConfigurado['nivelAcesso'];
        $idTipoUsuario = $tipoUsuarioConfigurado['idtipoUsuario'];

        
        $sqlInsert = "INSERT INTO usuario (usuario, nomeUsuario, senha, nivelAcesso, situacao, email, telefone, cpf, idtipoUsuario) VALUES ('".$usuario."','".$nomeUsuario."','".$senha."',".$nivelAcesso.",'ativo','".$email."','".$telefone."','".$cpf."',".$idTipoUsuario.");";

        //$conexao->query($sqlInsert);

        if($conexao->query($sqlInsert) === TRUE){
                
            echo '<a href="criaUsuario.php"><h1 class="w3-button w3-teal">Usuario Inserido com sucesso</h1></a>';

            }else{

            echo '<a href="userAdmin.php"><h1 class="w3-button w3-teal">Houve erro</h1></a>';
        }

    }   

    $conexao->close();



?>