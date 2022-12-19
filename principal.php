<?php

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>

<title>Principal</title>
</head>

<body>

<div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"> 
    <div class="w3-quarter">Dados pessoais</div>
    <div class="w3-quarter">Administrador</div>
    <div class="w3-quarter">Atualiza senha</div>
    <div class="w3-quarter"><?php require_once ('logout.php'); /*Carrega logout*/?></div>
</div>

<div class="w3-container" style="color:black; text-align:center;">
    <h2>Bem vindo <?php echo $_SESSION['logado'] ?></h2><br>

    <?php
    echo "<h3> Imprime valor de logado:".$_SESSION['logado']."<br>";
    echo "Imprime valor de nivel acesso:".$_SESSION['acesso']."<br>";
    echo "Imprime valor de idusuario: ".$_SESSION['idusuario']."<br>";
    echo "Função date(): ".date('l jS \of F Y h:i:s A')." exemplo para captura </h3>";
?>
</div>





</body>
</html>