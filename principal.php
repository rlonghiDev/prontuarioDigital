<?php

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>

<title>Principal</title>
</head>

<body>

<div class="w3-row-padding w3-margin-top" style="background-color:dimgrey; color:white; text-align:center;"> 
    <div class="w3-quarter"><a href="dadosPessoais.php">Dados pessoais</a></div>
    <div class="w3-quarter">Administrador</div>
    <div class="w3-quarter">Atualiza senha</div>
    <div class="w3-quarter"><a href = "logoutAction.php">Sair</a></div>
</div>


<div style="background-color:blur; text-align:left;">
    <h2>Bem vindo <?php echo $_SESSION['logado'] ?></h2><br>

    <?php
    echo "<h4> Imprime valor de logado:".$_SESSION['logado']."<br>";
    echo "Imprime valor de nivel acesso:".$_SESSION['acesso']."<br>";
    echo "Imprime valor de idusuario: ".$_SESSION['idusuario']."<br>";
    echo "Função date(): ".date('l jS \of F Y h:i:s A')." exemplo para captura </h4>";
    
    require_once ('conexaoBD.php');

   //Usuario
   $sql1 = "SELECT * FROM usuario WHERE idusuario = '".$_SESSION['idusuario']."';";
   $resultadoUsuario = $conexao->query($sql1);
   $arrayUsuario = mysqli_fetch_array($resultadoUsuario);

   //Endereço
   $sql2 = "SELECT * FROM endereco WHERE idusuario = '".$arrayUsuario['idusuario']."';";
   $resultadoEndereco = $conexao->query($sql2);
   $arrayEndereco = mysqli_fetch_array($resultadoEndereco);

   //Cidade
   $sql3 = "SELECT * FROM cidade WHERE idcidade = '".$arrayEndereco['idcidade']."';";
   $resultadoCidade = $conexao->query($sql3);
   $arrayCidade = mysqli_fetch_array($resultadoCidade);

   //Estado
   $sql4 = "SELECT * FROM estado WHERE idestado = '".$arrayCidade['idestado']."';";
   $resultadoEstado = $conexao->query($sql4);
   $arrayEstado = mysqli_fetch_array($resultadoEstado);

        if ($arrayEstado != null){
            echo "$arrayEstado not null <br>";
            echo $arrayEstado['nomeEstado'];
        }else{
            echo "arrayEstado is null <br>";
            echo $sql4;
        }
    


    ?>

</div>





</body>
</html>