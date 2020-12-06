<?php

namespace Alura\Aula3;

require 'ArraysUtils.php';
declare(strict_types=1);

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12",
    "Rafael",
];

$ArrayUtils::remover("Giovanni”, $correntistas);
var_dump($correntistas);
