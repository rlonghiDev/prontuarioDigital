<?php

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>

<title>Dados pessoais</title>
</head>
<?php require_once ('infoUsuario.php'); ?>
<h4>Preencha ou verifique os dados abaixo</h4><br>

<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-third">

    
    
    <form class="w3-container " action="updateUsuarioAction.php" method="post">
        <div class="w3-section">
            <label style="font-weight: bold;">Nome</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="txtNomeUsuario" <?php echo 'required value="'.$valorPrevioNomeUsuario.'"'; ?> >
            
            <label style="font-weight: bold;">Logradouro</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe o nome do Logradouro" name="txtLogradouro" <?php echo 'required value="'.$valorPrevioLogradouro.'"'; ?> >

            <label style="font-weight: bold;">Número</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe o número" name="txtNumero" <?php echo 'required value="'.$valorPrevioNumero.'"'; ?> >

            <label style="font-weight: bold;">CEP</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe o CEP" name="txtCEP" <?php echo 'required value="'.$valorPrevioCEP.'"'; ?> >

            <label style="font-weight: bold;">Cidade</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe a Cidade" name="txtCidade" <?php echo 'required value="'.$valorPrevioCidade.'"'; ?> >

            <label style="font-weight: bold;">Estado</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe o Estado" name="txtEstado" <?php echo 'required value="'.$valorPrevioEstado.'"'; ?> >

            <label style="font-weight: bold;">País</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe o País" name="txtPais" <?php echo 'required value="'.$valorPrevioPais.'"'; ?> >

            <label style="font-weight: bold;">e-mail</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe o email" name="txtEmail" required>

            <label style="font-weight: bold;">Telefone</label>
            <input class="w3-input w3-border" type="text" placeholder="Informe o Número de Telefone" name="txtTelefone" required>
           
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Atualizar</button>
        </div>
    </form>

    <br>

    <?php echo $arrayUsuario['nomeUsuario'] ?><br>

<br>
<?php require_once ('rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/?>