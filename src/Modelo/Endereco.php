<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package 2\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $logradouro
 * @property-read string $numero
 */

final class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $logradouro;
    private string $numero;

    /**
     * Endereco constructor.
     * @param string $cidade
     * @param string $bairro
     * @param string $logradouro
     * @param string $numero
     */
    public function __construct(string $cidade, string $bairro, string $logradouro, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @return string
     */
    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @return string
     */
    public function recuperaLogradouro(): string
    {
        return $this->logradouro;
    }

    /**
     * @return string
     */
    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->logradouro}, {$this->numero}, {$this->bairro}, {$this->cidade}";

    }
}