<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>
<title>Anamnese</title>
</head>
<body>

<?php

    require_once 'topoPaginaAnamnese.php';

    $idPaciente = $_GET['idpaciente'];

    $sql = "SELECT * FROM paciente where idpaciente ='".$idPaciente."';";
    $resultadoPaciente = $conexao->query($sql);
    $arrayPaciente = mysqli_fetch_array($resultadoPaciente);

    $anamnese = "SELECT * FROM anamnese WHERE idpaciente ='".$idPaciente."';";
    $resultadoAnamnese = $conexao->query($anamnese);
    $arrayAnamnese = mysqli_fetch_array($resultadoAnamnese);

    $cid = "SELECT * FROM tabela_doencas;";
    $resultadoCid = $conexao->query($cid);
    //$arrayCid = mysqli_fetch_array($resultadoCid);

    $queixa = $arrayAnamnese['queixa'];
    $histDoencas = $arrayAnamnese['historicoDoenca'];
    $histFamiliar = $arrayAnamnese['historicoFamiliar'];
    $histPessoal = $arrayAnamnese['historicoPessoal'];

    if($queixa == null){
        $prevQueixa = $queixa;
    }else{
        $prevQueixa = '';
    }

    if($histDoencas == null){
        $prevDoenca = $histDoencas;
    }else{
        $prevDoenca = '';
    }

    if($histFamiliar == null){
        $prevFamiliar = $histFamiliar;
    }else{
        $prevFamiliar = '';
    }

    if($histPessoal == null){
        $prevPessoal = $histPessoal;
    }else{
        $prevPessoal = '';
    }

?>

<div class="w3-container w3-round-xxlarge w3-card-4 w3-threequarter">

        <form class="w3-container" action="anamneseAction.php" method="post">

            <div class="w3-section">
            <input type="hidden" name="txtIdPaciente" value="<?php echo $idPaciente; ?>"/>
                
                <label style="font-weight: bold;">Nome do Paciente</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome completo" name="txtNomePaciente" readonly <?php echo 'required value = "'.$arrayPaciente['nomePaciente'].'"'; ?> >
                <br>

                <div class="w3-section w3-third w3-center">
                    <label style="font-weight: bold;">Data de Nascimento</label>
                    <input class="w3-input w3-border w3-border-gray" type="date" name="txtDataNascimento" readonly <?php echo 'required value = "'.$arrayPaciente['dataNascimento'].'"'; ?> >
                </div>

                <div class="w3-section w3-third w3-center"></div>
                
                <div class="w3-section w3-third w3-center">
                    <label style="font-weight: bold;">CPF</label>
                    <input class="w3-input w3-border w3-border-gray" type="text" name="txtCpf" readonly <?php echo 'required value = "'.$arrayPaciente['cpf'].'"'; ?> >
                </div>

                <br>
            </div>

            <br>

            <div class="w3-section w3-center">
                <div class="w3-section w3-threequarter w3-center">

                    <div class="w3-section w3-quarter w3-padding-small">
                        <label style="font-weight: bold;">Queixa</label>
                        <textarea cols="5" rows="7"  maxlength="600" class="w3-input w3-border w3-border-gray" type="text" placeholder="Queixas" name="txtQueixa" <?php echo 'required value="'.$prevQueixa.'"'; ?>></textarea>
                    </div>

                    <div class="w3-section w3-quarter w3-padding-small">
                        <label style="font-weight: bold;">Histórico de Doenças</label>
                        <textarea cols="5" rows="7"  maxlength="600" class="w3-input w3-border w3-border-gray" type="text" placeholder="Diabetes, Hipertensão, Hepatite ..." name="txtHistoricoDoencas" <?php echo 'required value="'.$prevDoenca.'"'; ?>></textarea>
                    </div>

                    <div class="w3-section w3-quarter w3-padding-small">
                        <label style="font-weight: bold;">Histórico Familiar</label>
                        <textarea cols="5" rows="7"  maxlength="600" class="w3-input w3-border w3-border-gray" type="text" placeholder="Doenças de irmãos, pais e tios" name="txtHistoricoFamiliar" <?php echo 'required value="'.$prevFamiliar.'"'; ?>></textarea>
                    </div>

                    <div class="w3-section w3-quarter w3-padding-small">
                        <label style="font-weight: bold;">Histórico Pessoal</label>
                        <textarea cols="5" rows="7"  maxlength="600" class="w3-input w3-border w3-border-gray" type="text" placeholder="Procedimento cirúrgicos, Acidentes, Tatuagem" name="txtHistoricoPessoal" <?php echo 'required value="'.$prevPessoal.'"'; ?>></textarea>
                    </div>
                </div>
            </div>
            <button class="w3-button w3-block w3-teal w3-section w3-padding w3-center" type="submit">Gravar Informações</button>

        </form>

    </div>
    <br>
    
        <?php
        $conexao->close();
        ?>




</body>
</html>

