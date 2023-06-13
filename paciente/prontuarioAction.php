<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>

<title>Inserção no Prontuário</title>
</head>
<body>
    <?php

    $idPaciente = $_POST['txtIdPaciente'];
    $anotacaoMedica = $_POST['txtNotaMedica'];
    $prescricao = $_POST['txtPrescricao'];
    $dataInsercao = date('d/m/Y');


    $sqlInsereProntuario = "INSERT INTO evolucao (idpaciente, notamedica, prescricao, dataConsulta) 
    VALUES ('".$idPaciente."','".$anotacaoMedica."','".$prescricao."','".$dataInsercao."');";
    

    if($conexao->query($sqlInsereProntuario) === true){
        echo '<br><br><center><a href="/prontuarioDigital/paciente/prontuario.php?idpaciente='.$idPaciente.'"><h1 class="w3-button w3-teal">Inclusão realizada com Sucesso</h1></a></center>';
    }else{
        echo '<br><br><center><a href="/prontuarioDigital/paciente/prontuario.php?idpaciente='.$idPaciente.'">Inserção Falhou</a></center>';
    }

    ?>

</body>