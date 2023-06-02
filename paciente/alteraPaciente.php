<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>
<title>Altera Paciente</title>
</head>
<body>
    <!-- <p><a href="/prontuarioDigital/paciente/paciente.php"><i class="arrow left"></i></a></p> -->

    <?php
         $idPaciente = $_GET['idpaciente'];

         $sql = "SELECT * FROM paciente where idpaciente ='".$idPaciente."';";
         $resultadoPaciente = $conexao->query($sql);
         $arrayPaciente = mysqli_fetch_array($resultadoPaciente);

         $sql1 = "SELECT * FROM endereco where idpaciente ='".$idPaciente."';";
         $resultadoEnderecoPaciente = $conexao->query($sql1);
         $arrayEndereco = mysqli_fetch_array($resultadoEnderecoPaciente);


        $nomePaciente = $arrayPaciente['nomePaciente'];
        $dataNascimento = $arrayPaciente['dataNascimento'];
        $sexoBiologico = $arrayPaciente['sexoBiologico'];
        $genero = $arrayPaciente['genero'];
        $nomeMae = $arrayPaciente['nomeMae'];
        $nomePai = $arrayPaciente['nomePai'];
        $naturalDe = $arrayPaciente['naturalidade'];
        $cpf = $arrayPaciente['cpf'];
        $cep = $arrayEndereco['cep'];
        $logradouro = $arrayEndereco['logradouro'];
        $numeroCasa = $arrayEndereco['numero'];
        $bairro = $arrayEndereco['bairro'];
        $cidade = $arrayEndereco['cidade'];
        $estado = $arrayEndereco['estado'];
        $tipoEndSelecionado = $arrayEndereco['idtipoEndereco'];
        $pais = "Brasil";
        $convenio = $arrayPaciente['convenioMedico'];
        $tipoEndereco = $arrayEndereco['idtipoEndereco'];
        $email = $arrayPaciente['email'];
        $telefone = $arrayPaciente['telefone'];

        if ($nomePaciente == null){
            $valorPrevioNomePaciente = '';
        }else{
            $valorPrevioNomePaciente = $nomePaciente;
        }
    
        if ($dataNascimento == null){
            $valorPrevioDataNascimento = '';
        }else{
            $valorPrevioDataNascimento = $dataNascimento;
        }
    
        if ($sexoBiologico == null){
            $valorPrevioSexo = '';
        }else{
            $valorPrevioSexo = $sexoBiologico;
        }
    
        
        if ($genero == null){
            $valorPrevioGenero = '';
        }else{
            $valorPrevioGenero = $genero;
        }
    
        if ($nomeMae == null){
            $valorPrevioMae = '';
        }else{
            $valorPrevioMae = $nomeMae;
        }
    
        if ($nomePai == null){
            $valorPrevioPai = '';
        }else{
            $valorPrevioPai = $nomePai;
        }

        if ($naturalDe == null){
            $valorPrevioNatural = '';
        }else{
            $valorPrevioNatural = $naturalDe;
        }

        if ($cpf == null){
            $valorPrevioCpf = '';
        }else{
            $valorPrevioCpf  = $cpf;
        }
    
        if ($logradouro == null){
            $valorPrevioLogradouro = '';
        }else{
            $valorPrevioLogradouro = $logradouro;
        }
    
        if ($numeroCasa == null){
            $valorPrevioCasa = '';
        }else{
            $valorPrevioCasa = $numeroCasa;
        }

        if ($bairro == null){
            $valorPrevioBairro = '';
        }else{
            $valorPrevioBairro = $bairro;
        }

        if ($cidade == null){
            $valorPrevioCidade = '';
        }else{
            $valorPrevioCidade = $cidade;
        }

        if ($cep == null){
            $valorPrevioCep = '';
        }else{
            $valorPrevioCep  = $cep;
        }
    
        if ($estado == null){
            $valorPrevioEstado = '';
        }else{
            $valorPrevioEstado = $estado;
        }
    
        if ($convenio == null){
            $valorPrevioConvenio = '';
        }else{
            $valorPrevioConvenio = $convenio;
        }

        if ($email == null){
            $valorPrevioEmail = '';
        }else{
            $valorPrevioEmail = $email;
        }

        if ($telefone == null){
            $valorPrevioTelefone = '';
        }else{
            $valorPrevioTelefone = $telefone;
        }
        

    ?>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-twothird">

<form class="w3-container" action="alteraPacienteAction.php" method="post">
    <input type="hidden" name="txtIdPaciente" value="<?php echo $idPaciente; ?>"/>

    <div class="w3-section">

        <!-- Tabela paciente no BD -->
        <label style="font-weight: bold;">Nome do Paciente</label>
        <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome completo" name="txtNomePaciente"  <?php echo 'required value="'.$nomePaciente.'"'; ?>>
        <br>

        <div class="w3-section w3-third w3-center">
            <label style="font-weight: bold;">Data de Nascimento</label>
            <input class="w3-input w3-border w3-border-gray" type="date" name="txtDataNascimento" <?php echo 'required value="'.$valorPrevioDataNascimento.'"'; ?>>
        </div>
        <br>
              
        <?php 

            echo '<div class="w3-section w3-third w3-center">';
                echo '<label style="font-weight: bold;">Sexo Biológico</label><br>';
                echo '<select name="txtSexo">';

                    if($valorPrevioSexo == 'Feminino'){
                        $selecionado = 'selected';
                    }else{
                        $selecionado = '';
                    }

                    echo '<option value="Feminino" '.$selecionado.'>Feminino</option>';

                    if($valorPrevioSexo == 'Masculino'){
                        $selecionado = 'selected';
                    }else{
                        $selecionado = '';
                    }

                    echo '<option value="Masculino" '.$selecionado.'>Masculino</option>';
                    
                echo '</select>';
            echo '</div>';

            echo '<div class="w3-section w3-third w3-center">';
                echo '<label style="font-weight: bold;">Gênero</label><br>';
                echo '<select name="txtGenero">';

                    if($valorPrevioGenero == 'Feminino'){
                        $selecao = 'selected';
                    }else{
                        $selecao = '';
                    }
                    echo '<option value="Feminino" '.$selecao.'>Feminino</option>';

                    if($valorPrevioGenero == 'Masculino'){
                        $selecao = 'selected';
                    }else{
                        $selecao = '';
                    }
                    echo '<option value="Masculino" '.$selecao.'>Masculino</option>';
                    
                    if($valorPrevioGenero == 'Outros'){
                        $selecao = 'selected';
                    }else{
                        $selecao = '';
                    }
                    echo '<option value="Outros" '.$selecao.'>Outros</option>';
                echo '</select>';
            echo '</div>';
         
        ?>

        <br>

        <label style="font-weight: bold;">Nome da Mãe</label>
        <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome da mãe" name="txtMae" <?php echo 'required value="'.$valorPrevioMae.'"'; ?>>

        <label style="font-weight: bold;">Nome do Pai</label>
        <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome do Pai" name="txtPai" <?php echo 'required value="'.$valorPrevioPai.'"'; ?>>

        <div class="w3-section w3-third w3-center">
            <label style="font-weight: bold;">Natural de:</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o local de Nascimento" name="txtNaturalde" <?php echo 'required value="'.$valorPrevioNatural.'"'; ?>>
        </div>

        <div class="w3-section w3-third"></div>

        <div class="w3-section w3-third w3-center">
            <label style="font-weight: bold;">CPF</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o CPF" name="txtCpf" <?php echo 'required value="'.$valorPrevioCpf.'"'; ?>>
        </div>

        <!-- Tabela Endereço -->
        <label style="font-weight: bold;">CEP</label>
        <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o CEP" name="txtCEP" id="cep" <?php echo 'required value="'.$valorPrevioCep.'"'; ?>>
        
        <label style="font-weight: bold;">Logradouro</label>
        <input class="w3-input w3-border input-background-color" type="text" name="txtLogradouro" id="rua" readonly <?php echo 'required value="'.$valorPrevioLogradouro.'"'; ?>>

        <label style="font-weight: bold;">Número</label>
        <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o número" name="txtNumero" <?php echo 'required value="'.$valorPrevioCasa.'"'; ?>>

        <label style="font-weight: bold;">Bairro</label>
        <input class="w3-input w3-borderi input-background-color" type="text" name="txtBairro" id="bairro" readonly <?php echo 'required value="'.$valorPrevioBairro.'"'; ?>>

        <label style="font-weight: bold;">Cidade</label>
        <input class="w3-input w3-border input-background-color" type="text" name="txtCidade" id="cidade" readonly <?php echo 'required value="'.$valorPrevioCidade.'"'; ?>>

        <label style="font-weight: bold;">Estado</label>
        <input class="w3-input w3-border input-background-color" type="text" name="txtEstado" id= "uf" readonly<?php echo 'required value="'.$valorPrevioEstado.'"'; ?>>

        <label style="font-weight: bold;">Tipo Endereço</label>
        <br>
        
        <?php
                  
            echo '<select class="tipo-endereco" name="txtTipoEndereco">';
                    if($tipoEndereco == '1'){
                        $select = 'selected';
                    }else{
                        $select = '';
                    }
                echo '<option value="1"'.$select.'">Residencial</option>';
            
                    if($tipoEndereco == '2'){
                        $select = 'selected';
                    }else{
                        $select = '';
                    }

                echo '<option value="2" '.$select.'>Comercial</option>';
            echo '</select>';
            echo '<br>';

        ?>

         <!--Tabela Paciente -->
        <label style="font-weight: bold;">e-mail</label>
        <input class="w3-input w3-border w3-border-gray" type="email" placeholder="Informe o email" name="txtEmail" required <?php echo 'required value="'.$valorPrevioEmail.'"'; ?>>

        <label style="font-weight: bold;">Telefone</label>
        <input class="w3-input w3-border w3-border-gray" type="tel" placeholder="Informe o Número de Telefone" name="txtTelefone" <?php echo 'required value="'.$valorPrevioTelefone.'"'; ?>>

       
        <label style="font-weight: bold;">Convênio Médico</label>
        <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome do Convênio" name="txtConvênio" <?php echo 'required value="'.$valorPrevioConvenio.'"'; ?> >
    
        <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Alterar Paciente</button>
    </div>
</form>

</div>
<br>
<script src = "/prontuarioDigital/js/cep.js"></script>

</body>
</html>