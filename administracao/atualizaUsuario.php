<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/

require_once ('../bd/conexaoBD.php'); //Conectividade com o Banco de Dados

$idUsuario = $_GET['idusuario'];


    $sqlUsuario = "SELECT * FROM usuario WHERE idusuario = ".$idUsuario.";"; 
    $resultadoUsuario = $conexao->query($sqlUsuario);
    $arrayUsuarios = mysqli_fetch_array($resultadoUsuario);
    
    $nickName = $arrayUsuarios['usuario'];
    $nomeUsuario = $arrayUsuarios['nomeUsuario'];
    $senha = $arrayUsuarios['senha'];
    $nivelAcesso = $arrayUsuarios['nivelAcesso'];
    $situacao = $arrayUsuarios['situacao'];
    $email = $arrayUsuarios['email'];
    $telefone = $arrayUsuarios['telefone'];
    $cpf = $arrayUsuarios['cpf'];
    $rg = $arrayUsuarios['rg'];
    $idtipoUsuario = $arrayUsuarios['idtipoUsuario'];


    $sqlTipoUsuario = "SELECT * FROM tipoUsuario;";
    $resultadoTipoUsuario = $conexao -> query ($sqlTipoUsuario);
    


    if ($nickName == null){
        $valorPrevioNickName = '';
    }else{
        $valorPrevioNickName = $nickName;
    }

    if ($nomeUsuario == null){
        $valorPrevioNomeUsuario = '';
    }else{
        $valorPrevioNomeUsuario = $nomeUsuario;
    }

    if ($senha == null){
        $valorPrevioSenha = '';
    }else{
        $valorPrevioSenha = $senha;
    }

    
    if ($situacao == null){
        $valorPrevioSituacao = '';
    }else{
        $valorPrevioSituacao = $situacao;
    }

    if ($email == null){
        $valorPrevioEmail = '';
    }else{
        $valorPrevioEmail = $email;
    }

    if ($telefone == null){
        $valorPrevioTelefone = '';
    }else{
        $valorPrevioTelefone = $telefone;
    }

    if ($cpf == null){
        $valorPrevioCpf = '';
    }else{
        $valorPrevioCpf  = $cpf;
    }

    if ($rg == null){
        $valorPrevioRg = '';
    }else{
        $valorPrevioRg = $rg;
    }

    if ($idtipoUsuario == null){
        $valorPrevioIdTipoUsuario = '';
    }else{
        $valorPrevioIdTipoUsuario = $idtipoUsuario;
    }

?>
<title>Atualização de Usuários</title>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-twothird">

    <form class="w3-container" action="atualizaUsuarioAction.php" method="post">
        <div class="w3-section">
            <label style="font-weight: bold;">ID Usuário</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtIdUsuario" readonly <?php echo 'required value="'.$idUsuario.'"'; ?> >
            
            <label style="font-weight: bold;">Apelido para Login</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtNickName" <?php echo 'required value="'.$valorPrevioNickName.'"'; ?> >
          
            <label style="font-weight: bold;">Nome do Usuário</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtNomeUsuario" <?php echo 'required value="'.$valorPrevioNomeUsuario.'"'; ?>  >

            <label style="font-weight: bold;">Senha</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtSenha" <?php echo 'required value="'.$valorPrevioSenha.'"'; ?> >
            
            <label style="font-weight: bold;">Nível de acesso</label><br>
            <select name="txtNivelAcesso">

                <?php

                    foreach ($resultadoTipoUsuario as $tiposDeUsuario) {

                        if($nivelAcesso == $tiposDeUsuario['nivelAcesso']){
                            $selecionado = 'selected';
                        }else{
                            $selecionado = '';
                        }

                        echo '<option value="'.$tiposDeUsuario['nivelAcesso'].'"'.$selecionado.'>'.$tiposDeUsuario['cargoUsuario'].'</option>';



                    }

                ?>

            </select><br>

            <label style="font-weight: bold;">Situação</label><br>
            <select name="txtSituacao">



                <?php

                    if($valorPrevioSituacao == 'ativo'){
                        $opcao1 = '<option value="ativo" selected>ativo</option>';
                        $opcao2 = '<option value="inativo">inativo</option>';
                    }else{
                        $opcao1 = '<option value="ativo">ativo</option>';
                        $opcao2 = '<option value="inativo" selected>inativo</option>';
                    }

                    echo $opcao1;
                    echo $opcao2;                

                ?>
            </select>
            <br>

            <label style="font-weight: bold;">Email</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtEmail"<?php echo 'required value="'.$valorPrevioEmail.'"'; ?> >

            <label style="font-weight: bold;">Telefone</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtTelefone" id="cidade" <?php echo 'required value="'.$valorPrevioTelefone.'"'; ?> >

            <label style="font-weight: bold;">CPF</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtCpf" id= "uf" <?php echo 'required value="'.$valorPrevioCpf.'"'; ?>>

            <label style="font-weight: bold;">RG</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtRg" <?php echo 'required value="'.$valorPrevioRg.'"'; ?>>

            <label style="font-weight: bold;">ID Tipo Usuário</label>
            <input class="w3-input w3-border w3-border-gray" type="text" name="txtTipoUsuario" readonly <?php echo 'required value="'.$valorPrevioIdTipoUsuario.'"'; ?>>
           
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Atualizar</button>
        </div>
    </form>
    <br>
</div>
<br>

<?php 

    require_once ('../rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/

?>

