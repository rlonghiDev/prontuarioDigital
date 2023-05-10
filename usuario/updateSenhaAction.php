<?php

require_once ('../cabecalho.php'); 
require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../bd/conexaoBD.php');

$senhaAtual = $_POST['txtSenha'];
$novaSenha = $_POST['txtNovaSenha'];
$confirmaSenha = $_POST['txtConfirmaNovaSenha'];

$sql = "SELECT senha FROM usuario WHERE idusuario = '".$_SESSION['idusuario']."';";
$senhaAntiga = $conexao->query($sql);
$arraySenhaAntiga = mysqli_fetch_array($senhaAntiga);


if($novaSenha === $confirmaSenha and $senhaAtual === $arraySenhaAntiga['senha'] ){


    $sql1 = "UPDATE usuario SET senha = '".$novaSenha."' WHERE idusuario = '".$_SESSION['idusuario']."';";

    

    if($conexao->query($sql1) === true){
        echo ' 
            <a href="/prontuarioDigital/principal/principal.php">
            <h1 class="w3-button w3-teal">Senha Modificada com Sucesso !!!</h1>
            </a> ';

    }

    

}else{

    echo ' 
    <a href="/prontuarioDigital/usuario/atualizaSenha.php">
    <h1 class="w3-button w3-teal">A senha digitada não confere com a do campo de confirmação <br> ou sua senha atual não confere <BR>Tente Novamente</h1>
    </a> ';
     

}


?>