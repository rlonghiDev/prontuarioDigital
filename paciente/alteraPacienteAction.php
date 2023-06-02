<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>
<title>Resultado do Altera Paciente</title>
</head>
<body>
<?php


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
    $idPaciente = $_POST['txtIdPaciente'];


    $updatePaciente = "UPDATE paciente SET nomePaciente = '".$nomePaciente."', dataNascimento = '".$dataNascimento."', sexoBiologico = '".$sexoBiologico."', genero = '".$genero."', 
    nomePai = '".$nomePai."', nomeMae = '".$nomeMae."', naturalidade = '".$naturalDe."', convenioMedico = '".$convenio."', telefone = '".$telefone."', cpf = '".$cpf."',
    email = '".$email."' WHERE idpaciente = '".$idPaciente."';";
    


    $updateEndereco = "UPDATE endereco set logradouro = '".$logradouro."' , bairro = '".$bairro."', cidade = '".$cidade."', estado = '".$estado."', pais = '".$pais."', cep = '".$cep."', 
    idtipoEndereco = '".$tipoEndSelecionado."', numero = '".$numeroCasa."' WHERE idpaciente = '".$idPaciente."';";

    if($conexao->query($updatePaciente) === TRUE && $conexao->query($updateEndereco) === TRUE){

        echo '<br><br><center><a href="/prontuarioDigital/paciente/paciente.php"><h1 class="w3-button w3-teal">Atualização realizada com Sucesso</h1></a></center>';

    }else{

        echo '<br><br><center><a href="/prontuarioDigital/paciente/paciente/listaPaciente.php"><h1>class="w3-button w3-teal">Houve erro</h1></a></center>';

    }
?>


</body>
</html>