<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>
</head>
<body>
    <?php
        $idPaciente = $_POST['txtIdPaciente'];
        $queixa = $_POST['txtQueixa'];
        $histDoencas = $_POST['txtHistoricoDoencas'];
        $histFamilia = $_POST['txtHistoricoFamiliar'];
        $histPessoal = $_POST['txtHistoricoPessoal'];
        $dataEntrada = date('d/m/y');

        $sql = "INSERT INTO anamnese (queixa, historicoDoenca, historicoFamiliar, historicoPessoal, idpaciente, dataInfos)
        VALUES ('".$queixa."','".$histDoencas."','".$histFamilia."','".$histPessoal."','".$idPaciente."','".$dataEntrada."');";

        if($conexao->query($sql) === true){
            echo '<br><br><center><a href="/prontuarioDigital/paciente/anamnese.php?idpaciente='.$idPaciente.'"><h1 class="w3-button w3-teal">Inclusão realizada com Sucesso</h1></a></center>';
        }else{
            echo '<br><br><center><a href="/prontuarioDigital/paciente/prontuario.php?idpaciente='.$idPaciente.'">Inserção Falhou</a></center>';
        }

    ?>
</body>
</html>