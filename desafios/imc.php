<?php

$peso = 95;
$altura = 1.67;

$imc = ($peso / $altura ** 2);
if ($imc < 16){
    echo "Seu IMC = $imc, Subpeso Severo";
    }elseif ($imc <= 19.9 && $imc >= 16){
    echo "Seu IMC = $imc, Subpeso";
}elseif ($imc <= 24.9 && $imc >= 20){
    echo "Seu IMC = $imc, Normal";
}elseif ($imc <= 29.9 && $imc >= 25){
    echo "Seu IMC = $imc, Sobrepeso";
}elseif ($imc <= 39.9 && $imc >= 30){
    echo "Seu IMC = $imc, Obeso";
}else{
    echo "Seu IMC = $imc, Obeso Mórbido";
}

