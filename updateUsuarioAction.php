<?php

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/


    $nomeUsuario = $_POST['txtNomeUsuario'];
    $logradouro = $_POST['txtLogradouro'];
    $numeroCasa = $_POST['txtNumero'];
    $cep = $_POST['txtCEP'];
    $cidade = $_POST['txtCidade'];
    $estado = $_POST['txtEstado'];
    $pais = $_POST['txtPais'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $rg = $_POST['txtRg'];
    $cpf = $_POST['txtCpf'];

    require_once ('conexaoBD.php');

     //update do usuário
    $sql = "UPDATE usuario set nomeUsuario = '".$nomeUsuario."', email = '".$email."', telefone = '".$telefone."', rg = '".$rg."', cpf = '".$cpf."' where idusuario = '".$_SESSION['idusuario']."';";
    $sql1 = "UPDATE pais set nomePais = '".$pais."' WHERE idusuario = '".$_SESSION['idusuario']."';";
    $sql2 = "UPDATE estado set nomeEstado = '".$estado."' WHERE idusuario = '".$_SESSION['idusuario']."';";
    $sql3 = "UPDATE cidade set nomeCidade = '".$cidade."' WHERE idusuario = '".$_SESSION['idusuario']."';";
    $sql4 = "UPDATE endereco set logradouro = '".$logradouro."', numero = '".$numeroCasa."',cep = '".$cep."' WHERE idusuario = '".$_SESSION['idusuario']."';";


    $conexao->query($sql1);
    $conexao->query($sql2);
    $conexao->query($sql3);
    $conexao->query($sql4);

    /* $sql1 = "UPDATE endereco AS E INNER JOIN cidade AS CID ON E.idcidade = CID.idcidade SET CID.nomeCidade = '".$cidade."' WHERE E.idusuario = '".$_SESSION['idusuario']."';";
    $sql2 = "UPDATE cidade AS CID INNER JOIN estado AS ES ON ES.idestado = CID.idestado SET CID.nomeCidade = '".$cidade."' WHERE CID.idcidade = '".$_SESSION['idusuario']."';";
    $sql3 = "UPDATE estado AS ES INNER JOIN pais AS P ON ES.idpais = P.idpais SET ES.nomeEstado = '".$estado."' WHERE ES.idestado = '".$_SESSION['idusuario']."';";
    $sql3 = "UPDATE pais AS P INNER JOIN estado AS ES ON P.idpais = ES.idpais SET nomePais =".$pais.";";
    echo $sql2."<br>"; */

    if($conexao->query($sql) === TRUE){
            
        echo '<a href="principal.php"><h1 class="w3-button w3-teal">Atualização realizada com Sucesso</h1></a>';
        }else{
        echo '<a href="dadosPessoais.php"><h1>class="w3-button w3-teal">Houve erro</h1></a>';
    }
    $conexao->close();

?>
