<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '124.356.790-80' => [
        'titular' => 'João',
        'saldo' => 500
    ],
    '148-259-367-00' => [
        'titular' => 'Kalel',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 100);
$contasCorrentes['124.356.790-80'] = depositar($contasCorrentes['124.356.790-80'],-90);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
