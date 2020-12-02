<?php


use Alura\Banco\Service\ContraladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Renato de Souza',
    new Cpf('909.100.369-34'),
    5500
);

$umFuncionario->sobeDeNivel();

$doisFuncionario = new Gerente(
    'Melissa Luz',
    new Cpf('033.122.234-11'),
    4500
);

$umDiretor = new Diretor(
    'Ana Paula',
    new Cpf('033.122.234-11'),
    5500
);

$umEditor = new EditorVideo(
    'Paulo Soares',
    new Cpf('500.100.332-10'),
    2500
);


$controlador = new ContraladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($doisFuncionario);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal();