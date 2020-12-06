<?php

$agora = new DateTime();

echo $agora->format('d/m/Y H:i');

$agora = new DateTime('now');

print_r($agora) . PHP_EOL;

$ontem = new DateTime('yesterday');

$dia15 = new DateTime('2020-11-15');

print_r($ontem) . PHP_EOL;

print_r($dia15) . PHP_EOL;

$formato = 'd/m/Y';
$stringDataDia21 = '21/12/2020';
$dia21 = DateTime::createFromFormat($formato, $stringDataDia21);

print_r($dia21) . PHP_EOL;


$entrada = new DateTime('09:00');
$saida = new DateTime('18:00');

$intervalo = $saida->diff($entrada);
print_r($intervalo);

echo $intervalo->h . PHP_EOL;

$timezone = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now', $timezone);

print_r($agora) . PHP_EOL;

print_r(DateTimeZone::listIdentifiers()); //lista de fusos horários suportados pelo DateTimeZone

$umDia = new DateInterval('P1D'); // Intervalo de 1 dia
// Com DateTime:
$hoje = new DateTime();
echo $hoje->format('d/m') . PHP_EOL; //Saída 04/12
$hoje->add($umDia); //Altera o valor de $hoje
echo $hoje->format('d/m') . PHP_EOL; //Saida 05/12


// Com DateTimeImmutable
$hoje = new DateTimeImmutable();
echo $hoje->format('d/m') . PHP_EOL; //Saida 04/12
$amanha = $hoje->add($umDia); // Não altera o valor de $hoje
echo $hoje->format('d/m') . PHP_EOL;
echo $amanha->format('d/m') . PHP_EOL;


$inicio = new DateTime('2022-11-21');
$intervalo = new DateInterval('P4Y');
$fim = new DateTime('2042-11-22');
$periodo = new DatePeriod($inicio, $intervalo, 5);

foreach ($periodo as $data) {
    echo $data->format('d/m/Y') . PHP_EOL;
}
