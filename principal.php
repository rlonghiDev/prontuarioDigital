<?php 

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>
<title>Principal</title>
</head>

<?php require_once ('logout.php'); /*Link para logout*/?>

<?php
    echo '<h2> Imprime valor de logado:'.$_SESSION['logado'].'</h2><br>';
    echo '<h2> Imprime valor de acesso:'.$_SESSION['acesso'].'</h2><br>';
    echo '<h2> Imprime valor de idusuario:'.$_SESSION['idusuario'].'</h2><br>';
    echo '<h3> Função date(): '.date('l jS \of F Y h:i:s A').' exemplo para captura';
    
?>

<?php require_once ('rodape.php'); /*Padrão de apresentação do rodapé*/ ?>