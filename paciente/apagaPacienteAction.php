<?php 
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados
    require_once ('../cabecalho.php'); 
?>
<title>Apaga Paciente</title>
</head>
<body>
    <?php
        $idPaciente = $_GET['idpaciente'];

        $sql = "DELETE FROM paciente where idpaciente ='".$idPaciente."';";

        if($conexao->query($sql) === true){
            echo '<br><br><center><a href="/prontuarioDigital/paciente/paciente.php"><h1 class="w3-button w3-teal">Paciente apagado com sucesso !</h1></a></center>';
        }else{
            echo '<br><br><center><a href="/prontuarioDigital/paciente/paciente.php"><h1 class="w3-button w3-teal">Aconteceu um problema, tente novamente </h1></a></center>';
        }

    ?>
</body>