<?php
    require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
    require_once ('../bd/conexaoBD.php');

    try{
        $conecta = new PDO("mysql:dbname=$bd; host=$host; port=3306; charset=utf8", $usuario, $senha); /*Atente para chamada do driver PDO*/
        $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo '
        <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
        <h1 class="w3-center w3-indigo w3-round-large w3-margin">Lista de tipos de Profissionais</h1>
        <table class="w3-table-all w3-centered w3-text-black">
        <thead>
            <tr class="w3-center w3-indigo">
                <th>Código</th>
                <th>Profissão</th>
                <th>Editar</th>
                
            </tr>
        <thead>
    ';

    $sql = "SELECT * FROM tipoUsuario" ;
    $resultado = $conecta->query($sql);
    
    if($resultado != null)
    foreach($resultado as $linha) {
        echo '<tr>';
        echo '<td>'.$linha['idtipoUsuario'].'</td>';
        echo '<td>'.$linha['cargoUsuario'].'</td>';
        echo '<td>'.$linha['nivelAcesso'].'</td>';
        echo '<td><a href="editaUsuario.php?idtipoUsuario = '.$linha['idtipoUsuario'].'&cargoUsuario = '.$linha['cargoUsuario'].'&nivelAcesso ='.$linha['nivelAcesso'].'"><i class="fa fa-user-times w3-large w3-text-indigo"></i> </a></td>'; /*Essa linha prepara um GET para realizar a edição do item*/
        
        echo '</tr>';
    }

    echo '
    </table>
    </div>';
}catch(PDOException $e){
    echo "falha ao conectar: ". $e->getMessage();
    }
?>



<?php 

    require_once ('../rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/

?>