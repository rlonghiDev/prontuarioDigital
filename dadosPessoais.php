<?php

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">
    
    <form class="w3-container " action="updateUsuarioAction.php" method="post"> <!Passa as informações de Usuário para o banco>
        <div class="w3-section">
            <label style="font-weight: bold;">Nome</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="txtNomeUsuario" <?php echo 'required value="'.$nomeUsuario.'"' ?> >
            
            <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border" type="text" placeholder="Digite a Senha" name="txtSenha" required>
           
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Atualizar</button>
        </div>
    </form>
<br>
<?php require_once ('rodape.php'); /*Faz a chamada da estrutura padronizada de Cabeçalho*/?>