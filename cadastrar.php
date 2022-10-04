<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Banco de Dados</title>
</head>
<body>
    <!--O action determina para onde será enviado os dados do formulário.-->
    <form action="inserir.php" method="POST">
        <label>Email:</label>
        <br>
        <input type="text" name="email">
        <br>
        <label>Senha:</label>
        <br>
        <input type="password" name="senha">
        <!--Necessário um input do tipo submit.-->
        <input type="submit" value="Cadastrar-se">
    </form>
</body>
</html>