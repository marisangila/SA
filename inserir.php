<?php
    include("conexao.php");

    //atribuindo valores dos campos a variaveis.
    $email = $_POST["email"];
    $email = $_POST["email"];

    //converte a senha para hash MD5, para que não seja armazenada em texto limpo no banco de dados.
    $senha = MD5($_POST["senha"]);

    //comando SQL.
    $comando = $pdo -> prepare("INSERT INTO usuario(email_usuario,senha_usuario, is_adm_usuario) VALUES(:email,:senha,0)");  
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":email",$email);                                     
    $comando->bindValue(":senha",$senha);                                  
    
    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:cadastrar.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>
