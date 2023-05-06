<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>

<center><h1>Página de administração de usuários</h1></center>

<div class="w3-row-padding w3-margin-top" style="background-color:blue; color:white; text-align:center;"> 
    <div class="w3-half"><a href= "/prontuarioDigital/administracao/criaUsuario.php"><h2>Novo Usuário</h2></a></div>
    <div class="w3-half"><a href= "/prontuarioDigital/administracao/buscaUsuario.php"><h2>Buscar Usuário</h2></a></div>
        
</div>





<?php 

    require_once ('../rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/

?>