<?php require_once ('./cabecalho.php'); ?>
    <title>Login Action</title>
</head>
<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
        <?php
            session_start();
            $usuario = $_POST['txtUsuario'];
            $senha = $_POST['txtSenha'];
            require_once ('./bd/conexaoBD.php');

            $sql = "SELECT * FROM usuario WHERE usuario = '".$usuario."';";
            $resultado = $conexao->query($sql);
            //echo $sql;
            $linha = mysqli_fetch_array($resultado);
            
            if($linha != null)
            {
                if($linha['senha'] == $senha)
                {
                    $situacao = $linha['situacao'];

                    if($situacao == "ativo"){
                        echo '
                        <a href="./principal/principal.php">
                        <h1 class="w3-button w3-teal">'.$usuario.', Seja Bem-Vindo(a)! </h1>
                        </a>
                        ';
                        $_SESSION['logado'] = $usuario;
                        $_SESSION['acesso'] = $linha['nivelAcesso'];
                        $_SESSION['idusuario'] = $linha['idusuario'];
                        
                    }else{

                        echo '
                        <a href="./index.php">
                        <h1 class="w3-button w3-teal">Usuário Bloqueado!<br> Contate seu administrador</h1>
                        </a> ';
                    }
                    
                    
                }
                else
                {
                    echo '
                    <a href="./index.php">
                    <h1 class="w3-button w3-teal">Usuário ou senha Inválidos</h1>
                    </a> ';
                }
                
            }
            else
            {
                echo '
                <a href="./index.php">
                <h1 class="w3-button w3-teal">Login Inválido! </h1>
                </a>
                ';
            }
            $conexao->close();
        ?>
    </div>
<?php require_once ('./rodape.php'); ?>