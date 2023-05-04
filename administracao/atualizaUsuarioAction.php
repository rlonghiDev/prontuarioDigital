<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/

require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados

$idUsuario = $_POST['txtIdUsuario'];
$usuario = $_POST['txtNickName'];
$nomeUsuario = $_POST['txtNomeUsuario'];
$senha = $_POST['txtSenha'];
$nivelAcesso = $_POST['txtNivelAcesso'];
$situacao = $_POST['txtSituacao'];
$email = $_POST['txtEmail'];
$telefone = $_POST['txtTelefone'];
$cpf = $_POST['txtCpf'];
$rg = $_POST['txtRg'];
$idTipoUsuario = $_POST['txtTipoUsuario'];


$updateUsuario = "UPDATE usuario SET usuario = '".$usuario."', nomeUsuario = '".$nomeUsuario."', senha = '".$senha."', nivelAcesso = '".$nivelAcesso."', situacao = '".$situacao."', email = '".$email."', telefone = '".$telefone."', cpf = '".$cpf."', rg = '".$rg."' WHERE idusuario = '".$idUsuario."';";

$conexao->query($updateUsuario);


if($conexao->query($updateUsuario) === TRUE){
            
    echo '<a href="/administracao/atualizaUsuario.php?idusuario='.$idUsuario.'"><h1 class="w3-button w3-teal">Atualização realizada com Sucesso</h1></a>';
    }else{
    echo '<a href="/administracao/atualizaUsuario.php?idusuario='.$idUsuario.'"><h1>class="w3-button w3-teal">Houve erro</h1></a>';
}
$conexao->close();


?>