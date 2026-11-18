<?php

class Robo {
    private string $nome;
    private float $bateria;
    private int $pontos;

    public function __construct($nome, $bateria, $pontos){
        $this->nome = $nome;
        $this->bateria = $bateria;
        $this->pontos = $pontos;

        $this->bateria = 100;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getBateria(){
        return $this->bateria;
    }

    public function getPontos(){
        return $this->pontos;
    }

    public function executarDesafio(){
        return $this->bateria -= 20 AND $this->pontos += 10;
    }

    public function recarregar(){
        return $this->bateria = 100;
    }

    public function exibirInformacoes(){
        echo"Nome do Robo: " . $this->nome . " | Bateria: " . " | Pontos: " . $this->pontos;
    }
}

$robo1 = new Robo("Robson", 40, 0);
$robo1->exibirInformacoes();
$robo1->executarDesafio();
$robo1->recarregar();
$robo1->exibirInformacoes();