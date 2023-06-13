<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>
<title>Prontuario</title>
</head>
<body>
   
    <?php
        $idPaciente = $_GET['idpaciente'];

        require_once 'topoPaginaProntuario.php';
        
        $sql = "SELECT * FROM paciente where idpaciente ='".$idPaciente."';";
         $resultadoPaciente = $conexao->query($sql);
         $arrayPaciente = mysqli_fetch_array($resultadoPaciente);

        
         $evolucao = "SELECT * FROM evolucao WHERE idpaciente ='".$idPaciente."';";
         $resultadoEvolucao = $conexao->query($evolucao);
         //$arrayEvolucao = mysqli_fetch_array($resultadoEvolucao);

        

    ?>

    <div class="w3-container w3-round-xxlarge w3-card-4 w3-threequarter">

        <form class="w3-container" action="prontuarioAction.php" method="post">

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

                    <div class="w3-section w3-half w3-padding-small">
                        <label style="font-weight: bold;">Anotação Médica</label>
                        <textarea cols="5" rows="14"  maxlength="600" class="w3-input w3-border w3-border-gray" type="text" placeholder="Informações Médicas do paciente" name="txtNotaMedica" ></textarea>
                    </div>

                    <div class="w3-section w3-half w3-padding-small">
                        <label style="font-weight: bold;">Prescrição</label>
                        <textarea cols="5" rows="14"  maxlength="600" class="w3-input w3-border w3-border-gray" type="text" placeholder="Prescrição" name="txtPrescricao" ></textarea>
                    </div>
                </div>
            </div>
            <button class="w3-button w3-block w3-teal w3-section w3-padding w3-center" type="submit">Gravar Informações</button>

        </form>

    </div>
    <br>
    <table class="w3-table-all w3-centered w3-text-black w3-threequarter">
    <thead>
        <tr>
            <td><h3>Evolução Médica</h3></td>
            <td><h3>Prescrição</h3></td>
            <td><h3>Inserido em: </h3>
        </tr>
    </thead>
    <?php
        foreach($resultadoEvolucao as $anotacao){
                echo "<tr>";

                    echo "<td>".$anotacao['notamedica']."</td>";
                    echo "<td>".$anotacao['prescricao']."</td>";
                    echo "<td>".$anotacao['dataConsulta']."</td>";
            
                echo "</tr>";

            }

        echo "</table>";
        echo "</div>";

        $conexao->close();

        ?>




</body>
</html>

    