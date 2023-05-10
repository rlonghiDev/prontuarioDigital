<?php

    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
?>

<title>Alteração de Senha</title>
<body>

<?php require_once('../topoPagina.php'); ?>
<?php require_once('./topoPaginaUsuario.php'); ?>



<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-twothird">

    <form class="w3-container" action="updateSenhaAction.php" method="post">

        <div class="w3-section">

            <label style="font-weight: bold;">Senha Atual</label>
            <input class="w3-input w3-border w3-border-gray" type="password" placeholder="Digite a senha atual " name="txtSenha" >
            
            <label style="font-weight: bold;">Nova Senha</label>
            <input class="w3-input w3-border w3-border-gray" type="password" placeholder="Informe a nova Senha" name="txtNovaSenha">

            <label style="font-weight: bold;">Confirme a Nova Senha</label>
            <input class="w3-input w3-border w3-border-gray" type="password" placeholder="Confirme a nova Senha" name="txtConfirmaNovaSenha">

            
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Atualizar</button>
        </div>
    </form>
<br>
</div>
</body>