<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>


<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-twothird">

    <form class="w3-container" action="novoUsuarioAction.php" method="post">

        <div class="w3-section">

            <label style="font-weight: bold;">Usuário para Login</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o Usuário para login" name="txtUsuarioLogin" >
            
            <label style="font-weight: bold;">Nome do usuário</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome do Usuário" name="txtNomeUsuario" >

            <label style="font-weight: bold;">CPF</label>
            <input class="w3-input w3-border w3-border-gray" type="number" placeholder="Digite o CPF" name="txtCpf" >
            
            <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe a senha com 6 digitos" name="txtSenha" >

            

            <label style="font-weight: bold;">Estado</label>
            <input class="w3-input w3-border input-background-color" type="text" name="txtEstado" id= "uf" readonly <?php echo 'required value="'.$valorPrevioEstado.'"'; ?>>

            <label style="font-weight: bold;">Tipo Endereço</label>
            <br>
            <select class="tipo-endereco" name="txtTipoEndereco">
                <option value="residencial" selected>Residencial</option>
                <option value="comercial">Comercial</option>
            </select>
            <br>

            <label style="font-weight: bold;">e-mail</label>
            <input class="w3-input w3-border w3-border-gray" type="email" placeholder="Informe o email" name="txtEmail" required <?php echo 'required value="'.$valorPrevioEmail.'"'; ?>>

            <label style="font-weight: bold;">Telefone</label>
            <input class="w3-input w3-border w3-border-gray" type="tel" placeholder="Informe o Número de Telefone" name="txtTelefone" required <?php echo 'required value="'.$valorPrevioTelefone.'"'; ?>>
           
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Criar Usuário</button>
        </div>
    </form>
    <br>
</div>


<?php 

    require_once ('../rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/

?>