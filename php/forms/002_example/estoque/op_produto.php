<?php

$produto = $_POST["produto"];
$preco = $_POST["preco"];
$estoque = $_POST["estoque"];

echo "Produto: " . $produto;
echo "<br>Preço: " . $preco;
echo "<br>Estoque: " . $estoque;

echo "<br><a href='index.php'>Voltar</a>";
