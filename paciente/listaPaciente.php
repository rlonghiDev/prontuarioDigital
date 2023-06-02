<?php 
require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
require_once ('../cabecalho.php'); 
?>
<title>Listagem de Pacientes</title>
<body>

<?php

$sqlPaciente = "SELECT * FROM paciente;"; 
    $resultadoPaciente = $conexao->query($sqlPaciente);

    echo '
    <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
        <h1 class="w3-center w3-indigo w3-round-large w3-margin">Relação de Usuários</h1>
            <table class="w3-table-all w3-centered w3-text-black">
                <thead>
                    <tr class="w3-center w3-indigo">
                        <th>ID Paciente</th>
                        <th>Nome</th>                        
                        <th>CPF</th>
                        <th>Prontuario</th>
                        <th>Editar</th>
                       

                    </tr>
                <thead>
    ';
        foreach($resultadoPaciente as $paciente){
            echo "<tr>";
            echo "<td>".$paciente['idpaciente']."</td>";
            echo "<td>".$paciente['nomePaciente']."</td>";
            echo "<td>".$paciente['cpf']."</td>";
            echo '<td><a href="/prontuarioDigital/paciente/prontuario.php?idpaciente='.$paciente['idpaciente'].'">Prontuário</a></td>';
            echo '<td><a href="/prontuarioDigital/paciente/alteraPaciente.php?idpaciente='.$paciente['idpaciente'].'">Alterar</a></td>';
            //echo '<td><a href="/prontuarioDigital/paciente/apagaPacienteAction.php?idpaciente='.$paciente['idpaciente'].'">Apagar</a></td>';
            echo "</tr>";

        }

        echo "</table>";
        echo "</div>";




        $conexao->close();
?>

</body>
</html>