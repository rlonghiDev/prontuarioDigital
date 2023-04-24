<?php

    require_once ($_SERVER['DOCUMENT_ROOT'].'/verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ($_SERVER['DOCUMENT_ROOT'].'/cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>


<title>Principal</title>
</head>

<body>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/topoPaginaP.php'); ?>


<div style="background-color:blur; text-align:left;">
    <h2>Bem vindo usuário <?php echo $_SESSION['logado'] ?></h2><br>

    <?php
    echo "<h4> Imprime valor de logado:".$_SESSION['logado']."<br>";
    echo "Imprime valor de nivel acesso:".$_SESSION['acesso']."<br>";
    echo "Imprime valor de idusuario: ".$_SESSION['idusuario']."<br>";
    echo "Função date():  ".date('l jS \of F Y h:i:s A')."     exemplo para captura </h4>";

    echo $_SERVER['DOCUMENT_ROOT'];
    
   ?>

</div>




<?php require_once ($_SERVER['DOCUMENT_ROOT'].'/rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/ ?>


</body>
</html>