<?php
    include("conexao.php");

    $codigo = $_GET['codigo'];

    //comando sql.
    $comando->prepare('UPDATE email_usuario,is_adm_usuario FROM usuario WHERE pk_usuario = :codigo;');

    //insere valores das variaveis no comando sql.
    $comando->bindValue(':codigo',$codigo);

    //executa a consulta no banco de dados.
    $comando->execute();

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>