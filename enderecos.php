<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Fpolis', 'Capoeiras','Rua Qualquer','12B');
$outroEndereco = new Endereco('Sao José', 'Bela', 'Rua Itaguaçu', '701');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

echo $umEndereco->bairro . PHP_EOL;
$umEndereco->logradouro = 'Rua Nova';
echo $umEndereco->logradouro;
exit();