<?php


namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ContraladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {

        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}