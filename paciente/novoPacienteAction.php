<?php

    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/


    $nomePaciente = $_POST['txtNomePaciente'];
    $dataNascimento = $_POST['txtDataNascimento'];
    $sexoBiologico = $_POST['txtSexo'];
    $genero = $_POST['txtGenero'];
    $nomeMae = $_POST['txtMae'];
    $nomePai = $_POST['txtPai'];
    $naturalDe = $_POST['txtNaturalde'];
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
    $convenio = $_POST['txtConvênio'];
    
    require_once ('../bd/conexaoBD.php');

    /* $sql2 = "SELECT * FROM endereco WHERE idusuario = '".$_SESSION['idusuario']."';";
    $resultadoEndereco = $conexao->query($sql2);
    $arrayEndereco = mysqli_fetch_array($resultadoEndereco); 
    */


    if($tipoEndSelecionado == "residencial"){
        $tipoEndereco = 1;
    }else{
        $tipoEndereco = 2;
    }



     //update do usuário
    
    
    if($nomePaciente != null){

        $sql1 = "INSERT INTO paciente (nomePaciente, dataNascimento,sexoBiologico, genero, nomePai,nomeMae,naturalidade,convenioMedico,cpf) VALUES ('.$nomePaciente.','

        ";

        $sql = "INSERT INTO endereco (logradouro, bairro, cidade, estado, pais, cep, idusuario, idtipoEndereco,  numero) VALUES('".$logradouro."','".$bairro."','".$cidade."','".$estado."','".$pais."','".$cep."','".$_SESSION['idusuario']."','".$tipoEndereco."','".$numeroCasa."');";
        echo '<script>console.log("idUsuario null")</script>';
        $conexao->query($sql);
        
    }
        
        
    // $sql1 = "UPDATE endereco set logradouro = '".$logradouro."', bairro = '".$bairro."', cidade = '".$cidade."', estado ='".$estado."', pais = '".$pais."', cep = '".$cep."', idtipoEndereco = '".$tipoEndereco."', numero = '".$numeroCasa."' WHERE idusuario = '".$_SESSION['idusuario']."';";
    //     echo '<script>console.log("idUsuario not null")</script>';

    $conexao->query($sql);
  
    

    

    if($conexao->query($sql) === TRUE){
            
        echo '<br><br><center><a href="/prontuarioDigital/principal/principal.php"><h1 class="w3-button w3-teal">Atualização realizada com Sucesso</h1></a></center>';
        }else{
        echo '<br><br><center><a href="/prontuarioDigital/principal/usuario/dadosPessoais.php"><h1>class="w3-button w3-teal">Houve erro</h1></a></center>';
    }
    $conexao->close();

?>