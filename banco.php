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

titularComLetrasMaiusculas ($contasCorrentes['148-259-367-00']);
?>

<!-- Inicio do HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {?>
        <dt><h2><?= $conta['titular'];?> - <?=$cpf;?></h2></dt>
        <dd>Saldo: <?= $conta['saldo']?> R$</dd>
        <?php } ?>
    </dl>
</body>
</html>