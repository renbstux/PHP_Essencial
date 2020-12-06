namespace Alura\Aula2;

<?php
$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000,
];
$arraySaldos = sort($saldos);

foreach ($arraySaldos as $saldo) {
    echo "<p>$saldo</p>";
}

echo "Menor saldo: $saldos[0]";

$nomes = "Giovanni, João, Maria, Pedro";

$arrayNomes = explode(", ", $nomes);

foreach ($arrayNomes as $nome) {
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(“, “, $arrayNomes);