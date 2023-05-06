<?php

require_once ('../verificaAcesso.php'); /*Verifica Sessão Ativa*/
require_once ('../cabecalho.php'); /*Padrão de apresentação do cabeçalho*/
   
?>

<title>Dados pessoais</title>
</head>

<?php require_once('../topoPagina.php'); ?>

<?php require_once ('./infoUsuario.php'); ?>


<div class="w3-container w3-round-xxlarge w3-display-middle w3-card-4 w3-twothird">

    <form class="w3-container" action="updateUsuarioAction.php" method="post">
        <div class="w3-section">
            <label style="font-weight: bold;">Nome</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Digite o nome" name="txtNomeUsuario" <?php echo 'required value="'.$valorPrevioNomeUsuario.'"'; ?> >
            
            <div>
                <label style="font-weight: bold;">RG</label>
                <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o número do RG" name="txtRg" <?php echo 'required value="'.$valorPrevioRg.'"'; ?> >
            </div>

            <label style="font-weight: bold;">CPF</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o número do CPF" name="txtCpf" <?php echo 'required value="'.$valorPrevioCpf.'"'; ?> maxlength="9" onblur="pesquisacep(this.value);" >

            <label style="font-weight: bold;">CEP</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o CEP" name="txtCEP" id="cep" <?php echo 'required value="'.$valorPrevioCEP.'"'; ?> >
            
            <label style="font-weight: bold;">Logradouro</label>
            <input class="w3-input w3-border input-background-color" type="text" name="txtLogradouro" id="rua" readonly <?php echo 'required value="'.$valorPrevioLogradouro.'"'; ?> >

            <label style="font-weight: bold;">Número</label>
            <input class="w3-input w3-border w3-border-gray" type="text" placeholder="Informe o número" name="txtNumero" <?php echo 'required value="'.$valorPrevioNumero.'"'; ?> >

            <label style="font-weight: bold;">Bairro</label>
            <input class="w3-input w3-borderi input-background-color" type="text" name="txtBairro" id="bairro" readonly <?php echo 'required value="'.$valorPrevioBairro.'"'; ?> >

            <label style="font-weight: bold;">Cidade</label>
            <input class="w3-input w3-border input-background-color" type="text" name="txtCidade" id="cidade" readonly <?php echo 'required value="'.$valorPrevioCidade.'"'; ?> >

            <label style="font-weight: bold;">Estado</label>
            <input class="w3-input w3-border input-background-color" type="text" name="txtEstado" id= "uf" readonly <?php echo 'required value="'.$valorPrevioEstado.'"'; ?>>

            <label style="font-weight: bold;">Tipo Endereço</label>
            <br>
            <select class="tipo-endereco" name="txtTipoEndereco">
                <option value="residencial" selected>Residencial</option>
                <option value="comercial">Comercial</option>
            </select>
            <br>

            <label style="font-weight: bold;">e-mail</label>
            <input class="w3-input w3-border w3-border-gray" type="email" placeholder="Informe o email" name="txtEmail" required <?php echo 'required value="'.$valorPrevioEmail.'"'; ?>>

            <label style="font-weight: bold;">Telefone</label>
            <input class="w3-input w3-border w3-border-gray" type="tel" placeholder="Informe o Número de Telefone" name="txtTelefone" required <?php echo 'required value="'.$valorPrevioTelefone.'"'; ?>>
           
            <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Atualizar</button>
        </div>
    </form>
    <br>
</div>
<br>

<script src = "/prontuarioDigital/js/cep.js"></script>

<?php 

    require_once ('../rodape.php'); /*Faz a chamada da estrutura padronizada de Rodapé*/

?>



<!-- <select class="w3-input w3-border" name="txtEstado" id="uf" >
                <?php 
                /* $estadoFixoString = str_replace('"','',$valorPrevioEstado);
                    for ($i=0; $i < count($combolistaEstado); $i++) {

                        $estadoString = str_replace('"','', $combolistaEstado[$i]); // str_replace(o que quero trocar ?, Troco por: , $ na variavel)
                        //Retirada de aspas da string para porder compará-las e montar o "selected" no combo
                        

                        if($estadoString == $estadoFixoString){
                            echo '<option value="'.$combolistaEstado[$i].'" selected>'.$combolistaEstado[$i].'</option>';
                        }else{
                        echo '<option value="'.$combolistaEstado[$i].'">'.$combolistaEstado[$i].'</option>';
                        }

                        echo $estadoString;
                        echo $estadoFixoString;
                
                    }*/
                    ?>
                    </select> -->