<?php

if($_SESSION['acesso'] == 0){

    echo '
    <div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"><h3>
        <div class="w3-quarter"><a href= "/prontuarioDigital/usuario/dadosPessoais.php">Usuário</a></div>
        <div class="w3-quarter"><a href= "/prontuarioDigital//paciente/paciente.php">Paciente</a></div>
        <div class="w3-quarter"><a href= "/prontuarioDigital/administracao/painel.php">Administração do Sistema</div>
        <div class="w3-quarter"><a href = "/prontuarioDigital/logoutAction.php">Sair</a></div></h3>
    </div>    
    ';

}

if($_SESSION['acesso'] > 0){

    echo '
    <div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"><h3>
        <div class="w3-third"><a href= "/prontuarioDigital/usuario/dadosPessoais.php">Usuário</a></div>
        <div class="w3-third"><a href= "/prontuarioDigital//paciente/paciente.php">Paciente</a></div>
        <div class="w3-third"><a href = "/prontuarioDigital/logoutAction.php">Sair</a></div></h3>
    </div>    
    ';

}







?>
