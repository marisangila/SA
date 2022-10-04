<?php
    include("conexao.php");

    $codigo = $_POST['codigo'];

    //comando sql.
    $comando->prepare('UPDATE email_usuario,is_adm_usuario FROM usuario WHERE pk_usuario = :codigo;');
    //executa a consulta no banco de dados.
    $comando->execute();
?>