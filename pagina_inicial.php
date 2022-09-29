<?php
    session_start();
    // Verifique se o usuário está logado, se não, redirecione-o para uma página de login
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.html");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Incial</title>
</head>

<body>
    <h3>Pagina Inicial</h3>
    <?php
    //verifica se o usuario conectado é administrador para mostrar a mensagem.
    if ($_SESSION['is_adm_usuario'] == 1) {
        echo '<p> Você é Administrador! </p>';
    }
    ?>
</body>

</html>