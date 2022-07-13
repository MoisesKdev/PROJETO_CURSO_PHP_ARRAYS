<?php 
class InfoPessoa{
    public $peso;
    public $altura;

    public function getDetalhes(){
        return "A sua altura é de {this->altura} e seu peso é {this->peso}" . PHP_EOL;
    }

}

$Imc1 = new InfoPessoa;
$Imc1 -> peso = 80;
$Imc1 -> altura = 1.75;

var_dump($Imc1);

?>