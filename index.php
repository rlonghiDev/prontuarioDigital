    <?php require_once ('cabecalho.php'); /*Faz a chamada da estrutura padronizada de Cabeçalho*/ ?> 
    <title>Login</title>
</head>
<body>

    <div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">
    
    <form class="w3-container " action="loginAction.php" method="post"> <!--Passa as informações de Usuário e Senha para validação-->
        <div class="w3-section form-section">
            <label style="font-weight: bold;">Usuário</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="txtUsuario" required>
            <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border" type="password" placeholder="Digite a Senha" name="txtSenha" required>
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Entrar</button>
        </div>
    </form>
    <br>
    </div>


<?php require_once ('rodape.php'); /*Faz a chamada da estrutura padronizada de Cabeçalho*/?>