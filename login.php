<?php
    //https://programadoresdepre.com.br/sistema-de-login-com-php-e-mysql-pdo/

    include("conexao.php");

    $email = $_POST["email"];
    $set_senha = $_POST["senha"];

    $comando = $pdo -> prepare("SELECT senha FROM usuario; WHERE email = :email");  
    $comando->bindValue(":email",$email);                                                         
    $comando->execute();
    $get_senha = $comando->fetchColumn()    
    
    if($get_senha == $set_senha){
        header("Location:pagina_inicial.html");
    }else{
        header("Location:login.html");
    }
    
?>
<?php
    include("conexao.php");

    $email = $_POST["email"];
    $set_senha = $_POST["senha"];

    $comando = $pdo -> prepare("SELECT id, senha, adm FROM usuario; WHERE email = :email");  
    $comando->bindValue(":email",$email);                                                         
    $comando->execute();
    if($resultado->rowCount() == 1){
        $resultado = $comando->fetch()    
    
        if(MD5($resultado['senha']) == $set_senha){
            if(!isset($_SESSION)){
                session_start()
                $_SESSION['id'] = $resultado['id'];
                $_SESSION['senha'] = $resultado['senha'];
                $_SESSION['adm'] = $resultado['adm'];
            }
            header("Location:pagina_inicial.html");
        }else{
            //senha incorreta!
            header("Location:login.html");
        }
    }else{
        //email incorreto!
        header("Location:login.html");
    }
    
    
?>