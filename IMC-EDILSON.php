<?php 
// Parámetros para cálculo do IMC
$peso = 90;
$altura = 1.82;

//Define o valor do IMC
$imc = $peso / $altura ** 2;

//Exibe o valor IMC
echo $imc . PHP_EOL;

$resultadoIMC = match(true){
    $imc <=18 => 'MAGREZA',
    $imc >= 19 && $imc <= 24=> 'NORMAL',
    $imc >= 25 && $imc <= 30=> 'SOBREPESO',
    $imc >= 31 && $imc <= 40=> 'OBESIDADE',
    default =>'ABSURDAMENTE FORA DO PESO'
};

echo "Seu IMC é de {$imc}, está classificado como {$resultadoIMC}!" . PHP_EOL;