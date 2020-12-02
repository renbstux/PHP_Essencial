<?php

$idade = 16;
$numeroDePessoas = 1;


echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18) {
        echo "Você tem $idade anos, você pode entrar sozinho.";

}elseif ($idade >= 16 and $numeroDePessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
    } else {
        echo "Você não pode acessar, você tem somente $idade anos!";
        echo PHP_EOL . "É uma pena";
    }
echo PHP_EOL;
echo "Adeus!";
