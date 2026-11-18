<?php

class Pessoa {

    public string $nome;
    private string $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getidade(){
        return $this->idade;
    }

    public function exibirDados(){
        echo"Nome: " . $this->nome . " | Idade: " . $this->idade;
    }

}

class Aluno extends Pessoa{
    public string $curso;

    public function __construct($nome, $idade, $curso){
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }

    public function exibicao(){
        echo" | Curso: " . $this->curso;
    }
}

$Aluno1 = new Aluno("Mara Maravilha", 16, "Desenvolvimento de Sistemas");
$Aluno1->getidade();
$Aluno1->exibirDados();
$Aluno1->exibicao();

echo"<br><br>";

$Aluno2 = new Aluno("Valesca Po-----", 18, "Moda");
$Aluno2->getidade();
$Aluno2->exibirDados();
$Aluno2->exibicao();