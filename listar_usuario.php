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
    <title>Pagina Inicial</title>
</head>

<body>
    <h3>Pagina Inicial</h3>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Email</th>
                <th>Nível de Acesso</th>
            </tr>
        </thead>
        <tbody>;
            <?php
                import("listar.php");
                //verifica se a variável tem os valores da tabela.
                if(!empty($resultado)){
                    //seleciona linha por linha.
                    foreach($linha as $resultado){
                        echo '<tr><td>';
                        echo $linha['pk_usuario'];
                        echo '</tr></td>';

                        echo '<tr><td>';
                        echo $linha['email_usuario'];
                        echo '</tr></td>';

                        echo '<tr><td>';
                        echo $linha['is_adm_usuario'];
                        echo '</tr></td>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>