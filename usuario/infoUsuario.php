<?php

    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/

    require_once ('../bd/conexaoBD.php');

    //Usuario
    $sql1 = "SELECT * FROM usuario WHERE idusuario = '".$_SESSION['idusuario']."';";
    $resultadoUsuario = $conexao->query($sql1);
    $arrayUsuario = mysqli_fetch_array($resultadoUsuario);

    //Endereço
    $sql2 = "SELECT * FROM endereco WHERE idusuario = '".$_SESSION['idusuario']."';";
    $resultadoEndereco = $conexao->query($sql2);
    $arrayEndereco = mysqli_fetch_array($resultadoEndereco);

    
   
    //Nome usuário
    if($arrayUsuario['nomeUsuario'] != null){
        $valorPrevioNomeUsuario = $arrayUsuario['nomeUsuario'];
    }
    else{
        $valorPrevioNomeUsuario = '';
    }

    //CPF
    if($arrayUsuario['cpf'] != null){
        $valorPrevioCpf = $arrayUsuario['cpf'];
    }
    else{
        $valorPrevioCpf = '""';
    }

    //RG
    if($arrayUsuario['rg'] != null){
        $valorPrevioRg = $arrayUsuario['rg'];
    }
    else{
        $valorPrevioRg = '""';
    }


    
    //Logradouro
    if($arrayEndereco['logradouro'] != null){
        $valorPrevioLogradouro = $arrayEndereco['logradouro'];
    }
    else{
        $valorPrevioLogradouro = '""';
    }

    //Número
    if($arrayEndereco['numero'] != null){
        $valorPrevioNumero = $arrayEndereco['numero'];
    }
    else{
        $valorPrevioNumero = '""';
    }
   
    //CEP
    if($arrayEndereco['cep'] != null){
        $valorPrevioCEP = $arrayEndereco['cep'];
    }
    else{
        $valorPrevioCEP = '""';
    }

    //Bairro
    if($arrayEndereco['bairro'] != null){
        $valorPrevioBairro = $arrayEndereco['bairro'];
    }
    else{
        $valorPrevioBairro = '""';
    }

    //Cidade
    if($arrayEndereco['cidade'] != null){
        $valorPrevioCidade = $arrayEndereco['cidade'];
    }
    else{
        $valorPrevioCidade = '""';
    }

     //Estado
     if($arrayEndereco['estado'] != null){
         $valorPrevioEstado = $arrayEndereco['estado'];
     }
     else{
         $valorPrevioEstado = 'SP';
     }


     //email
     if($arrayUsuario['email'] != null){
        $valorPrevioEmail = $arrayUsuario['email'];
     }
     else{
        $valorPrevioEmail = '""';
     }

     //Telefone 
     if($arrayUsuario['telefone'] != null){
        $valorPrevioTelefone = $arrayUsuario['telefone'];
     }
     else{
        $valorPrevioTelefone = '""';
     }

    $conexao->close();
?>
<br>

