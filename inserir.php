<?php
    include("conexao.php");

        
    //atribuindo valores dos campos a variaveis.
    $email = $_POST["email"];
    $imagem = $_FILES['imagem']['name']; 

    //converte a senha para hash MD5, para que não seja armazenada em texto limpo no banco de dados.
    $senha = MD5($_POST["senha"]);

    //comando SQL.
    $comando = $pdo -> prepare("INSERT INTO usuario(email_usuario,senha_usuario,imagem_usuario) VALUES(:email,:senha,:imagem)");  
    
    //insere valores das variaveis no comando sql.
    $comando->bindValue(":email",$email);
    $comando->bindValue(":imagem", $imagem);                                     
    $comando->bindValue(":senha",$senha);                                  
    
    //executa o comando SQL, ou seja, insere os dados no banco de dados.
    $comando->execute();

    //redireciona para a pagina informada.
    header("Location:cadastrar.php");

    //Fecha declaração e conexão.
    unset($comando);
    unset($pdo);
?>
