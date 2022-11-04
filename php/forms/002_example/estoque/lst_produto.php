<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produto</title>
</head>

<body>
    <h1>Listagem de Produtos</h1>
    <a href="frm_produto.php">Cadastrar Novo</a>
    <a href="index.php">| Home</a>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mouse</td>
                <td>R$ 50,00</td>
                <td>2,00</td>
                <td>R$ 100,00</td>
                <td><a href="#">Editar</a></td>
                <td><a href="#">Excluir</a></td>
            </tr>
            <tr>
                <td>Kit Teclado</td>
                <td>R$ 125,40</td>
                <td>3,00</td>
                <td>R$ 376,20</td>
                <td><a href="#">Editar</a></td>
                <td><a href="#">Excluir</a></td>
            </tr>
            <tr>
                <td>Gabinete Torre</td>
                <td>R$ 210,00</td>
                <td>2,00</td>
                <td>R$ 420,00</td>
                <td><a href="#">Editar</a></td>
                <td><a href="#">Excluir</a></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">Total</td>
                <td>R$ 896,20</td>
            </tr>
        </tfoot>
    </table>
</body>

</html>