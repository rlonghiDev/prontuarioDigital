<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/

require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados


                    
    // Sequencia para carregamento da lista de usuarios (Select)
    $sqlUsuario = "SELECT * FROM usuario;"; 
    $resultadoUsuario = $conexao->query($sqlUsuario);

    echo '
    <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
        <h1 class="w3-center w3-indigo w3-round-large w3-margin">Relação de Usuários</h1>
            <table class="w3-table-all w3-centered w3-text-black">
                <thead>
                    <tr class="w3-center w3-indigo">
                        <th>ID Usuário</th>
                        <th>Nick Usuário</th>
                        <th>Nome</th>
                        <th>Senha</th>
                        <th>Nível Acesso</th>
                        <th>Situação</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Tipo de Usuário</th>
                        <th>Ação</th>

                    </tr>
                <thead>
    ';
        foreach($resultadoUsuario as $usuarios){
            echo "<tr>";
            echo "<td>".$usuarios['idusuario']."</td>";
            echo "<td>".$usuarios['usuario']."</td>";
            echo "<td>".$usuarios['nomeUsuario']."</td>";
            echo "<td>".$usuarios['senha']."</td>";
            echo "<td>".$usuarios['nivelAcesso']."</td>";
            echo "<td>".$usuarios['situacao']."</td>";
            echo "<td>".$usuarios['email']."</td>";
            echo "<td>".$usuarios['telefone']."</td>";
            echo "<td>".$usuarios['cpf']."</td>";
            echo "<td>".$usuarios['rg']."</td>";
            echo "<td>".$usuarios['idtipoUsuario']."</td>";
            echo '<td><a href="/prontuarioDigital/administracao/atualizaUsuario.php?idusuario='.$usuarios['idusuario'].'">Altera</a></td>';
            echo "</tr>";

        }

        echo "</table>";
        echo "</div>";




        $conexao->close();
?>