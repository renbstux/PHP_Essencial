<?php

namespace Alura\Banco;

class ArraysUtils
{
    public static function remover(string $elemento, array &$array): void
    {
        $posicao = array_search($elemento, $array, true);
        if ($posicao) {
            unset($array[$posicao]);
            echo var_dump($array);
        } else {
            echo "Elemento não encontrado no array";
        }
    }
    public static function encontrarPessoasComSaldoMaior(int $saldo,array $array): array{
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {
            if($valor > $saldo){
                $correntistasComSaldoMaior[] = $chave;
            }
        }
        return $correntistasComSaldoMaior;
}