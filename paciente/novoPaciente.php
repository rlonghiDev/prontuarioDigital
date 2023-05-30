<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>
    <title>Cadastro de Paciente</title>
</head>
<body>

    <div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-twothird">

        <form class="w3-container" action="novoPacienteAction.php" method="post">

            <div class="w3-section">

                <!-- Tabela paciente no BD -->
                <label style="font-weight: bold;">Nome do Paciente</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome completo" name="txtNomePaciente" >
                <br>

                <div class="w3-section w3-third w3-center">
                    <label style="font-weight: bold;">Data de Nascimento</label>
                    <input class="w3-input w3-border w3-border-gray" type="date" name="txtDataNascimento" >
                </div>
                <br>
                      

                <div class="w3-section w3-third w3-center">
                    <label style="font-weight: bold;">Sexo Biológico</label><br>
                    <select name="txtSexo">
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>

                <div class="w3-section w3-third w3-center">
                    <label style="font-weight: bold;">Gênero</label><br>
                    <select name="txtGenero">
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
                 

                <br>

                <label style="font-weight: bold;">Nome da Mãe</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome da mãe" name="txtMae" >

                <label style="font-weight: bold;">Nome do Pai</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome do Pai" name="txtPai" >

                <div class="w3-section w3-third w3-center">
                    <label style="font-weight: bold;">Natural de:</label>
                    <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o local de Nascimento" name="txtNaturalde" >
                </div>

                <div class="w3-section w3-third"></div>

                <div class="w3-section w3-third w3-center">
                    <label style="font-weight: bold;">CPF</label>
                    <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o CPF" name="txtCpf" >
                </div>

                <!-- Tabela Endereço -->
                <label style="font-weight: bold;">CEP</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o CEP" name="txtCEP" id="cep">
                
                <label style="font-weight: bold;">Logradouro</label>
                <input class="w3-input w3-border input-background-color" type="text" name="txtLogradouro" id="rua" readonly>

                <label style="font-weight: bold;">Número</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o número" name="txtNumero">

                <label style="font-weight: bold;">Bairro</label>
                <input class="w3-input w3-borderi input-background-color" type="text" name="txtBairro" id="bairro" readonly>

                <label style="font-weight: bold;">Cidade</label>
                <input class="w3-input w3-border input-background-color" type="text" name="txtCidade" id="cidade" readonly >

                <label style="font-weight: bold;">Estado</label>
                <input class="w3-input w3-border input-background-color" type="text" name="txtEstado" id= "uf" readonly>

                <label style="font-weight: bold;">Tipo Endereço</label>
                <br>
                <select class="tipo-endereco" name="txtTipoEndereco">
                    <option value="residencial" selected>Residencial</option>
                    <option value="comercial">Comercial</option>
                </select>
                <br>
                
                <label style="font-weight: bold;">e-mail</label>
                <input class="w3-input w3-border w3-border-gray" type="email" placeholder="Informe o email" name="txtEmail" required >

                <label style="font-weight: bold;">Telefone</label>
                <input class="w3-input w3-border w3-border-gray" type="tel" placeholder="Informe o Número de Telefone" name="txtTelefone">

                <!--Tabela Paciente -->
                <label style="font-weight: bold;">Convênio Médico</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome do Convênio" name="txtConvênio" >
            
                <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Criar Paciente</button>
            </div>
        </form>
    
    </div>
    <br>
    <script src = "/prontuarioDigital/js/cep.js"></script>
</body>
</html>
