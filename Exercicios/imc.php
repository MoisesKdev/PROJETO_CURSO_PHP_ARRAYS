<?php 
// Parámetros para cálculo do IMC
$peso = 88;
$altura = 1.82;

//Define o valor do IMC
$imc = $peso / $altura ** 2;

//Exibe o valor IMC
echo $imc . PHP_EOL;

if($imc <= 18.5){
    echo "Seu IMC é de $imc, está classificado como MAGREZA!" . PHP_EOL;
}
else
if($imc >= 19 && $imc <= 24.9){
    echo "Seu IMC é de $imc, está classificado como NORMAL!" . PHP_EOL;
}
else
if($imc >= 25 && $imc <= 29.9){
    echo "Seu IMC é de $imc, está classificado como SOBREPESO!" . PHP_EOL;
}
else
if($imc >= 30 && $imc <= 39.9){
    echo "Seu IMC é de $imc, está classificado como OBESIDADE!" . PHP_EOL;
}
else
if($imc >= 40){
    echo "Seu IMC é de $imc, está ABSURDAMENTE FORA DO PESO!" . PHP_EOL;
}

?>