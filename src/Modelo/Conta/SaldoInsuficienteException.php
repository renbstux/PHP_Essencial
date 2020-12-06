<?php


namespace Alura\Banco\Modelo\Conta;


use Throwable;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta disponível.";
        parent::__construct($messagem);
    }
}