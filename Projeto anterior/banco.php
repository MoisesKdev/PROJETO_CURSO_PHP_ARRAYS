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
    ],
    '158.123.555-98' => [
        'titular' => 'José',
        'saldo' => 500
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
<!-- Integração código PHP no html-->
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {?>
        <dt"><h2><?= $conta['titular'];?></h2></dt>
        <dd>CPF: <?=$cpf;?></dd>
        <dd>Saldo: <?= $conta['saldo']?> R$</dd>
        <?php } ?>
    </dl>
</body>
</html>