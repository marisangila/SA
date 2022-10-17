<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Banco de Dados</title>
</head>
<body>
    <h3>Editar Usuario</h3>
    <!--O action determina para onde será enviado os dados do formulário.-->
    <form action="editar.php" method="POST" enctype="multipart/form-data">
        <label>Nome:</label>
        <br>
        <input type="text" name="nome">
        <br>
        <label>Email:</label>
        <br>
        <input type="text" name="email">
        <br>
        <!--Necessário um input do tipo submit.-->
        <input type="submit" value="Editar" name="submit">
    </form>
    <br>
    <a href="login.html">Entrar</a>
</body>
</html>