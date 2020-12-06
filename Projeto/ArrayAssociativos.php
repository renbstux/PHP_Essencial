<?php

namespace Alura\Banco\Alura;

//require 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

for($i=0; $i < count($correntistas); $i++)
{
    echo "O Correntista: $correntistas[$i] tem de Saldo o valor: $saldos[$i]" . PHP_EOL;
}

$relacionados = array_combine($correntistas, $saldos);

$relacionados["Matheus"] = 4500;

echo "<pre>";
var_dump($relacionados);
echo "</pre>";

echo $relacionados["Giovanni"] . PHP_EOL;

if (array_key_exists("João", $relacionados)) {
    echo "O Saldo do Cliente é: {$relacionados["João"]}" .PHP_EOL;
    }else {
    echo "Não encontrei a key no Array" . PHP_EOL;
    }

function encontrarPessoasComSaldoMaior(int $saldo,array $array): array
{
    $correntistasComSaldoMaior = array();
    foreach ($array as $chave => $valor) {
        if ($valor > $saldo) {
            $correntistasComSaldoMaior[] = $chave;
        }
    }
    return $correntistasComSaldoMaior;
}

$maiores = encontrarPessoasComSaldoMaior(3000, $relacionados);

var_dump($maiores);