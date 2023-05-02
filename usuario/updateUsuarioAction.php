<?php

    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/


    $nomeUsuario = $_POST['txtNomeUsuario'];
    $rg = $_POST['txtRg'];
    $cpf = $_POST['txtCpf'];
    $cep = $_POST['txtCEP'];
    $logradouro = $_POST['txtLogradouro'];
    $numeroCasa = $_POST['txtNumero'];
    $bairro = $_POST['txtBairro'];
    $cidade = $_POST['txtCidade'];
    $estado = $_POST['txtEstado'];
    $tipoEndSelecionado = $_POST['txtTipoEndereco'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $pais = "Brasil";
    
    require_once ('../bd/conexaoBD.php');

    $sql2 = "SELECT * FROM endereco WHERE idusuario = '".$_SESSION['idusuario']."';";
    $resultadoEndereco = $conexao->query($sql2);
    $arrayEndereco = mysqli_fetch_array($resultadoEndereco);


    if($tipoEndSelecionado == "Residencial"){
        $tipoEndereco = 1;
    }else{
        $tipoEndereco = 2;
    }

     //update do usuário
    $sql = "UPDATE usuario set nomeUsuario = '".$nomeUsuario."', email = '".$email."', telefone = '".$telefone."', rg = '".$rg."', cpf = '".$cpf."' where idusuario = '".$_SESSION['idusuario']."';";
    
    if($arrayEndereco['idusuario'] != null){

        $sql1 = "UPDATE endereco set logradouro = '".$logradouro."', bairro = '".$bairro."', cidade = '".$cidade."', estado ='".$estado."', pais = '".$pais."', cep = '".$cep."', idtipoEndereco = '".$tipoEndereco."', numero = '".$numeroCasa."' WHERE idusuario = '".$_SESSION['idusuario']."';";
        echo '<script>console.log("idUsuario not null")</script>';
    }else{
        $sql1 = "INSERT INTO endereco (logradouro, bairro, cidade, estado, pais, cep, idusuario, idtipoEndereco,  numero) VALUES('".$logradouro."','".$bairro."','".$cidade."','".$estado."','".$pais."','".$cep."','".$_SESSION['idusuario']."','".$tipoEndereco."','".$numeroCasa."');";
        echo '<script>console.log("idUsuario null")</script>';
    }
    
    

    $conexao->query($sql);
    $conexao->query($sql1);
    

    

    if($conexao->query($sql) === TRUE){
            
        echo '<a href="/principal/principal.php"><h1 class="w3-button w3-teal">Atualização realizada com Sucesso</h1></a>';
        }else{
        echo '<a href="/usuario/dadosPessoais.php"><h1>class="w3-button w3-teal">Houve erro</h1></a>';
    }
    $conexao->close();

?>
