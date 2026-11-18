<?php

abstract class Veiculo{
    private string $modelo;
    private float $valorDiaria;

    public function __construct($modelo, $valorDiaria){
        $this->modelo = $modelo;
        $this->valorDiaria = $valorDiaria;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getvalorDiaria(){
        return $this->valorDiaria;
    }

    abstract public function calcularAluguel($dias);
}

class carro extends Veiculo{
    
    public int $dias;

    public function __construct($modelo, $valorDiaria, $dias){
        parent::__construct($modelo, $valorDiaria);
        $this->dias = $dias;
    }

    public function calcularAluguel($dias){
        return $this->getvalorDiaria() * $dias + 50;
    }

    public function exibirInformacoes(){
        echo"Modelo: " . $this->getModelo() . " | Valor da Diária: " . $this->getvalorDiaria() . " | Dias: " . $this->dias . " | Valor Total: R$" . $this->calcularAluguel(5);
    }
}

class moto extends Veiculo{

    public int $dias;

    public function __construct($modelo, $valorDiaria, $dias){
        parent::__construct($modelo, $valorDiaria);
        $this->dias = $dias;

    }
    public function calcularAluguel($dias){
        return $this->getvalorDiaria() * $dias * 0.9;
    }

    public function exibirInformacoes(){
        echo"Modelo: " . $this->getModelo() . " | Valor da Diária: " . $this->getvalorDiaria() . " | Dias: " . $this->dias . " | Valor Total: R$" . $this->calcularAluguel(10);
    }
}


$carro = new carro("Civic 2009", 13, 5);
$carro->calcularAluguel(5);
$carro->exibirInformacoes();

echo"<BR><BR>";
$moto = new moto ("Yamaha R15", 10, 10);
$moto->calcularAluguel(10);
$moto->exibirInformacoes();