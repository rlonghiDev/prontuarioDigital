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
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    
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

        $sql1 = "INSERT INTO paciente (nomePaciente, dataNascimento, sexoBiologico, genero, nomePai, nomeMae, naturalidade, convenioMedico, cpf, email, telefone) 
        VALUES ('".$nomePaciente."','".$dataNascimento."','".$sexoBiologico."','".$genero."','".$nomePai."','".$nomeMae."','".$naturalDe."','".$convenio."','".$cpf."','".$email."','".$telefone."');";

        $conexao->query($sql1);
       
        $pacienteId = mysqli_insert_id($conexao);

        $sql = "INSERT INTO endereco (logradouro, bairro, cidade, estado, pais, cep, idtipoEndereco, numero, idpaciente, idusuario) 
        VALUES('".$logradouro."','".$bairro."','".$cidade."','".$estado."','".$pais."','".$cep."','".$tipoEndereco."','".$numeroCasa."','".$pacienteId."','1');";
        $conexao->query($sql);

        echo '<br><br><center><a href="/prontuarioDigital/principal/principal.php"><h1 class="w3-button w3-teal">Inclusão realizada com Sucesso</h1></a></center>';
        
        
    }else{

        echo '<br><br><center><a href="/prontuarioDigital/principal/usuario/dadosPessoais.php"><h1>class="w3-button w3-teal">Houve erro</h1></a></center>';

    }
        
        

    $conexao->close();

?>