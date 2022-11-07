<?php
include "Equacao.php";
if ($_POST) {

    $a = $_POST["a"];

    if ($a == 0) {
        $resultado = "O valor de ( a ) não pode ser igual a zero.";
    } else {
        $b = $_POST["b"];
        $c = $_POST["c"];

        $equacao = new Equacao($a, $b, $c);
        $resultado = $equacao->resultado();

        $equacao2 = new Equacao(1, -3, 2);
        $resultado2 = $equacao2->resultado();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação</title>
</head>

<body>
    <h2>Executando o cálculo PHP na mesma página!</h2>
    <h2>Remova o [ action="" ] da Tag [ form ], e adicione o Php no topo da página.</h2>
    <h2>ANTEÇÃO! Envolva as variáveis Php na condição if, de acordo com o [ method ] utilizado!</h2>
    <hr>
    <h2>Exercício: Equação do 2º Grau</h2>
    <hr>
    <form method="POST">
        Valor de a: <input type="number" name="a" value="<?php echo isset($a) ? $a : null ?>"><br>
        Valor de b: <input type="number" name="b" value="<?php echo isset($b) ? $b : null ?>"><br>
        Valor de c: <input type="number" name="c" value="<?php echo isset($c) ? $c : null ?>"><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if (isset($resultado)) {
        echo $resultado;
        echo "<hr>";
        echo $resultado2;
    }
    ?>
</body>

</html>