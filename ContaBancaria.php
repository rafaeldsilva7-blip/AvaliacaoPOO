<?php

class ContaBancaria {
    private string $titular;
    private string $Saldo;

    public function __construct($titular, $Saldo){
        $this->titular = $titular;
        $this->Saldo = $Saldo;
    }

    public function gettitular(){
        return $this->titular;
    }  

    public function getSaldo(){
        return $this->Saldo;
    }

    public function Depositar($deposito){
        return $this->Saldo += $deposito;
    }

    public function Saque($saque){
        return $this->Saldo -= $saque;
    }

    public function exibirInformacoes(){
        echo" | Títular: " . $this->titular . " | Saldo: " .$this->Saldo;
    }
}

$Conta1 = new ContaBancaria("Rafael", 400);
$Conta1->exibirInformacoes();
$Conta1->Depositar(400);
$Conta1->Saque(200);
$Conta1->exibirInformacoes();

echo"<br><br>";

$Conta2 = new ContaBancaria("Rafael 2", 3000);
$Conta2->exibirInformacoes();
$Conta2->Depositar(100);
$Conta2->Saque(100);
$Conta2->exibirInformacoes();