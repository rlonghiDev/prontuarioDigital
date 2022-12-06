<?php 
    require_once ('verificaAcesso.php');
    /*Logout*/
    unset( $_SESSION['logado'] );
    header("location:index.php");
?>