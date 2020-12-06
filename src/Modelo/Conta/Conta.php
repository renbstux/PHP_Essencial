<?php

namespace Alura\Banco\Modelo\Conta;

use http\Exception\InvalidArgumentException;



class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $id = 0;

    public function __construct(Titular $titular)
    {
        $this->saldo=0;
        $this->titular = $titular;

        self::$id++; //self ou nome da Classe
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new InvalidArgumentException();
        }

        $this->saldo += $valorADepositar;
    }



    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function numerodeContas(): int
    {
        return Conta::$id;
    }

    abstract protected function percentualTarifa(): float
}
