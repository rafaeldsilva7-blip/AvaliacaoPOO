<?php

abstract class Funcionario {

    private string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    abstract function calcularSalario();

}

class funcionarioFixo extends Funcionario{

    public float $salario;

    public function __construct($nome, $salario){
        parent::__construct($nome);
        $this->salario = $salario;
    }

    public function calcularSalario(){
        echo" | Salário do Funcionário Fixo: " . $this->salario;
        return;
    }
}

class funcionarioHorista extends Funcionario{

    public float $salario;

    public function __construct($nome, $salario){
        parent::__construct($nome);
        $this->salario = $salario;
    }

    public function calcularSalario(){
        echo" | Salário do funcionário Horista: " . $this->salario * 100;
        return;
    }
}





$funcionarioFixo = new funcionarioFixo("Rafael", 2500);
$funcionarioFixo->calcularSalario();

echo"<br><br>";

$funcionarioHorista = new funcionarioHorista("Rafael 2", 25);
$funcionarioHorista->calcularSalario();