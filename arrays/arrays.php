<?php

$arrayForma01 = [5.2, 8.0, 9.2, 7.5, 8.3, 10, 6.3, 9.5, 4.3];

$arrayForma02 = array(5.2, 8.0, 9.2, 7.5, 8.3, 10, 6.3, 9.5);

// array associativo/nomeado
$arrayForma03 = array(
    "nome001" => 5.2,
    "nome002" => 8.0,
    "nota3" => 9.2,
    "nota4" => 7.5,
    "nota5" => 8.3,
    "nome006" => 10.0,
    "nota7" => 6.3,
    "nome008" => 9.5
);

echo $arrayForma01[3];
echo "<hr>";
echo $arrayForma02[2];
echo "<hr>";
echo $arrayForma03["nome006"];
echo "<br>";
echo "<hr>";

echo "<h3>Percorrendo o Array [arrayForma01] com o laço For [ Pior Forma ]</h3>";
echo "<hr>";

for ($i = 0; $i < 8; $i++) {
    echo "[ " . $arrayForma01[$i] . " ]<br>";
}

echo "<h3>Percorrendo o Array [arrayForma01] com o laço For [ Melhor Forma ]</h3>";
echo "<hr>";

for ($i = 0; $i < count($arrayForma01); $i++) {
    echo "[ " . $arrayForma01[$i] . " ]<br>";
}

echo "<h3>Percorrendo o Array [arrayForma03] com o laço Foreach [ Forma 001 -> separando Chave/Valor ]</h3>";
echo "<hr>";

foreach ($arrayForma03 as $chave => $valor) {
    echo "Imprimindo a Chave: [ " . $chave . " ]<br>";
}

echo "<br>";

foreach ($arrayForma03 as $chave => $valor) {
    echo "Imprimindo o Valor: [ " . $valor . " ]<br>";
}

echo "<br>";

echo "<h3>Percorrendo o Array [arrayForma03] com o laço Foreach [ Forma 002 -> Pegando Valor direto ]</h3>";
echo "<hr>";

foreach ($arrayForma03 as $nota) {
    echo "Valor = " . $nota . "<br>";
}