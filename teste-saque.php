<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};


require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Renato de Souza',
        new Endereco('Fpolis', 'Capoeiras', 'Rua B', '1D')
    )
);

try {
    $conta->deposita(500);
} catch (InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo!";
}
try {
    $conta->saca(100);
}catch (SaldoInsuficienteException $exception){
    echo "Você não tem saldo para realizar este saque." . PHP_EOL;
}
echo $conta->recuperaSaldo();


