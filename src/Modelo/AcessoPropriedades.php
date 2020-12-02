<?php


namespace Alura\Banco\Modelo;


trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set(string $atribute, $newValue)
    {
        $this->$atribute = $newValue;
    }
}