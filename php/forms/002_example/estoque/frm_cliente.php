<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>

<body>
    <h1>Cadastro de Cliente</h1>
    <form action="op_cliente.php" method="POST">
        Nome: <input type="text" name="nome" id=""><br>
        E-mail: <input type="email" name="email" id=""><br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>