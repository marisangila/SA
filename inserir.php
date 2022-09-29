<?php
    include("conexao.php");

    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);

    $comando = $pdo -> prepare("INSERT INTO usuario(email_usuario,senha_usuario, is_adm_usuario) VALUES(:email,:senha,0)");  
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);                                  
    
    $comando->execute();

    header("Location:cadastrar.php");

    unset($comando);
    unset($pdo);
?>
