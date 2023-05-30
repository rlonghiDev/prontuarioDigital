<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/

    if($_SESSION['acesso'] == 0){

        echo '
        <div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"><h3>
            <div class="w3-quarter"><a href= "/prontuarioDigital/principal/principal.php">Voltar</a></div>
            <div class="w3-quarter"><a href= "/prontuarioDigital/paciente/novoPaciente.php">Cadastro novo Paciente</a></div>
            <div class="w3-quarter"><a href= "/prontuarioDigital/paciente/listaPaciente.php">Lista de pacientes Cadastrados</a></div>
            <div class="w3-quarter"><a href = "/prontuarioDigital/logoutAction.php">Sair</a></div></h3>
        </div>    
        ';
    
    }
    
    if($_SESSION['acesso'] > 0){
    
        echo '
        <div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"><h3>
            <div class="w3-quarter"><a href= "/prontuarioDigital/principal/principal.php">Voltar</a></div>
            <div class="w3-quarter"><a href= "/prontuarioDigital/paciente/novoPaciente.php">Cadastro novo Paciente</a></div>
            <div class="w3-quarter"><a href= "/prontuarioDigital/paciente/listaPaciente.php">Lista de pacientes Cadastrados</a></div>
            <div class="w3-quarter"><a href = "/prontuarioDigital/logoutAction.php">Sair</a></div></h3>
        </div> 
        ';
    
    }
    
    
?>

