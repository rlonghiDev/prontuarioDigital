<?php

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/


    /* $nomeUsuario = $_POST['txtNomeUsuario'];
    $logradouro = $_POST['txtLogradouro'];
    $numeroCasa = $_POST['txtNumero'];
    $cep = $_POST['txtCEP'];
    $cidade = $_POST['txtCidade'];
    $estado = $_POST['txtEstado'];
    $pais = $_POST['txtPais'];
    $email = $_POST['txtEmail'];
 */
    require_once ('conexaoBD.php');

    //Usuario
    $sql1 = "SELECT * FROM usuario WHERE idusuario = '".$_SESSION['idusuario']."';";
    $resultadoUsuario = $conexao->query($sql1);
    $arrayUsuario = mysqli_fetch_array($resultadoUsuario);

    //Endereço
    $sql2 = "SELECT * FROM endereco WHERE idusuario = '".$arrayUsuario['idusuario']."';";
    $resultadoEndereco = $conexao->query($sql2);
    $arrayEndereco = mysqli_fetch_array($resultadoEndereco);

    //Cidade
    $sql3 = "SELECT * FROM cidade WHERE idcidade = '".$arrayEndereco['idcidade']."';";
    $resultadoCidade = $conexao->query($sql3);
    $arrayCidade = mysqli_fetch_array($resultadoCidade);

    //Estado
    $sql4 = "SELECT * FROM estado WHERE idestado = '".$arrayCidade['idestado']."';";
    $resultadoEstado = $conexao->query($sql4);
    $arrayEstado = mysqli_fetch_array($resultadoEstado);

    //Pais
    $sql5 = "SELECT * FROM pais WHERE idpais = '".$arrayEstado['idpais']."';";
    $resultadoPais = $conexao->query($sql5);
    $arrayPais = mysqli_fetch_array($resultadoPais);






    //Nome usuário
    if($arrayUsuario['nomeUsuario'] != null)
    {
        $valorPrevioNomeUsuario = $arrayUsuario['nomeUsuario'];
    }
    else
    {
        $valorPrevioNomeUsuario = '';
    }
    
    //Logradouro
    if($arrayEndereco['logradouro'] != null)
    {
        $valorPrevioLogradouro = 'value ="'.$arrayEndereco['logradouro'].'"';
    }
    else
    {
        $valorPrevioLogradouro = 'value =""';
    }

    //Número
    if($arrayEndereco['numero'] != null)
    {
        $valorPrevioNumero = 'value ="'.$arrayEndereco['numero'].'"';
    }
    else
    {
        $valorPrevioNumero = 'value =""';
    }
   
    //CEP
    if($arrayEndereco['CEP'] != null)
    {
        $valorPrevioCEP = 'value ="'.$arrayEndereco['CEP'].'"';
    }
    else
    {
        $valorPrevioCEP = 'value =""';
    }

    //Cidade
    if($arrayCidade['nomeCidade'] != null)
    {
        $valorPrevioCidade = 'value ="'.$arrayCidade['nomeCidade'].'"';
    }
    else
    {
        $valorPrevioCidade = 'value =""';
    }

     //Estado
     if($arrayEstado['nomeEstado'] != null)
     {
         $valorPrevioEstado = 'value ="'.$arrayCidade['nomeEstado'].'"';
     }
     else
     {
         $valorPrevioEstado = 'value =""';
     }

     //Pais
     if($arrayPais['nomePais'] != null)
     {
         $valorPrevioPais = 'value ="'.$arrayPais['nomePais'].'"';
     }
     else
     {
         $valorPrevioPais = 'value =""';
     }


        
        
    
    $conexao->close();
?>


