<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};


require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Renato de Souza',
        new Endereco('Fpolis', 'Capoeiras', 'Rua B', '1D')
    )

);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();


