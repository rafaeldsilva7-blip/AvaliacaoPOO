<?php

abstract class Pagamento{
    private float $preco;

    public function __construct($preco){
        $this->preco = $preco;
    }

    public function getpreco(){
        return $this->preco;
    }

    abstract public function calcularTotal();
}

class Pix extends Pagamento{

    public function calcularTotal(){
        return $this->getpreco() * 0.9;
    }
}

class Cartao extends Pagamento{

    public function calcularTotal(){
        return $this->getpreco() * 1.05;
    }
}

class Boleto extends Pagamento{

    public function calcularTotal(){
        return $this->getpreco();
    }
}