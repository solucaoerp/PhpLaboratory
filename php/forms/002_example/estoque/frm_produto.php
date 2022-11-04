<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>

<body>
    <h1>Cadastro de Produto</h1>
    <form action="op_produto.php" method="POST">
        Produto: <input type="text" name="produto" id=""><br>
        Preço: <input type="text" name="preco" id=""><br>
        Estoque: <input type="number" name="estoque" id=""><br>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>