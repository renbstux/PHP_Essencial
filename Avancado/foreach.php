<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Renato',
        'saldo' => 1000
    ],
    12345678912 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12365678910 => [
        'titular' => 'João',
        'saldo' => 300
    ]
];

$contasCorrentes[78787878799] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta){
    //echo $cpf . PHP_EOL;
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}