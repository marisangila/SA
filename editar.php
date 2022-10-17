<?php
    include("conexao.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    //comando sql.
    $comando = $pdo->prepare('UPDATE usuario SET email_usuario = :email,  nome_usuario = :nome WHERE pk_usuario = :pk_usuario');
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":nome",$nome);   
    $comando->bindValue(":email",$email);
    session_start();
    $comando->bindValue(":pk_usuario",$_SESSION['pk_usuario']);

    //executa a consulta no banco de dados.
    $comando->execute();
?>