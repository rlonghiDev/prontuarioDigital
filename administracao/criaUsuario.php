<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/

require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados

?>


<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-twothird">

    <form class="w3-container" action="novoUsuarioAction.php" method="post">

        <div class="w3-section">

            <label style="font-weight: bold;">Usuário para Login</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o Usuário para login" name="txtUsuarioLogin" >
            
            <label style="font-weight: bold;">Nome do usuário</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome completo da pessoa" name="txtNomeUsuario" >

            <label style="font-weight: bold;">Tipo do usuario</label><br>
            <select name="txtTipoUsuario">
                    <?php
                    
                        // Sequencia para carregamento do combo box (Select)
                        $sqlUsuario = "SELECT * FROM tipoUsuario;"; 
                        $resultadoUsuario = $conexao->query($sqlUsuario);
                        foreach($resultadoUsuario as $opcao){
                            echo "<option>".$opcao['cargoUsuario']."</option>";
                        }
                        $conexao->close();

                    ?>
            </select>
            <br>

            <label style="font-weight: bold;">CPF</label>
            <input class="w3-input w3-border w3-border-gray" type="number" placeholder="Digite o CPF" name="txtCpf" >
            
            <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe a senha com 6 digitos" name="txtSenha" required>

            <label style="font-weight: bold;">e-mail</label>
            <input class="w3-input w3-border w3-border-gray" type="email" placeholder="Informe o email" name="txtEmail" required >

            <label style="font-weight: bold;">Telefone</label>
            <input class="w3-input w3-border w3-border-gray" type="tel" placeholder="Informe o Número de Telefone" name="txtTelefone">
           
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Criar Usuário</button>
        </div>
    </form>
    <br>
</div>


<?php 

    require_once ('../rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/

?>