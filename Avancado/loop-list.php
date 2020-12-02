<?php
$idadeList = [21, 23, 19, 25, 30, 41, 18, 44];
$alunosList = array('João', 'Maria', 'Pedro', 'Ana');


for ($i = 0; $i < count($idadeList); $i++){
    echo "$idadeList[$i]" . PHP_EOL;
}
for ($a = 0; $a < count($alunosList); $a++){
    echo "$alunosList[$a]" . PHP_EOL;
}