<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
require_once('../topoPagina.php');
require_once('./topoPaginaAdm.php');
   
?>

<br>
<br>

<h2>
<div class="w3-row-padding; w3-margin-top" style="color:black; text-align:center">

  <div class ="w3-half"><a href="./userAdmin.php">Administração de usuários</a></div>
  <div class ="w3-half">Tipos de usuários e permissões</div>

</div>

<br>
<br>

<div class="w3-row-padding; w3-margin-top" style="color:black; text-align:center">
  <div class ="w3-half">Relatórios</div>
  <div class ="w3-half"><a href = "/administracao/tipos.php">Inclusão de tipos</a></div>
</div>
</h2>

<?php 

    require_once ('../rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/

?>