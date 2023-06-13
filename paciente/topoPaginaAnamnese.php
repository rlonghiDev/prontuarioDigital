<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/

    if($_SESSION['acesso'] == 0){

        echo '
        <div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"><h3>
            <div class="w3-third"><a href= "/prontuarioDigital/paciente/listaPaciente.php">Lista Pacientes</a></div>
            <div class="w3-third"><a href= "/prontuarioDigital/paciente/exames.php">Exames</a></div>
            <div class="w3-third"><a href = "/prontuarioDigital/logoutAction.php">Sair</a></div></h3>
        </div>    
        ';
    
    }
    
    if($_SESSION['acesso'] > 0){
    
        echo '
        <div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"><h3>
            <div class="w3-third"><a href= "/prontuarioDigital/paciente/listaPaciente.php">Lista Pacientes</a></div>
            <div class="w3-third"><a href= "/prontuarioDigital/paciente/exames.php">Exames</a></div>
            <div class="w3-third"><a href = "/prontuarioDigital/logoutAction.php">Sair</a></div></h3>
        </div>     
        ';
    
    }
    
    
?>
