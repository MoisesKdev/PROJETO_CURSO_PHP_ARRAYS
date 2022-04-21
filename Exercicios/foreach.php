<?php

$contaCorrentes = [
    12345678910 => [
        'titular' => 'Moises',
        'saldo' => 10000
    ],
    62222598397 => [
        'titular' => 'Emily',
        'saldo' => 50000
    ],
];

foreach ($contaCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}