<?php


namespace Alura\Banco\Modelo\Funcionario;


use Throwable;

class PessoaException extends \Exception
{
    public function __construct($nome)
    {
        $mensagem = "O nome inserido não atende o minimo de tamanho para um nome";
         parent::__construct($mensagem);
    }
}