<?php

class Livro {

    public string $titulo;
    public string $autor;
    public int $paginas;

    public function __construct($titulo, $autor, $paginas){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function exibirInformacoes(){
        echo"Nome do Livro: " . $this->titulo . " | Autor: " . $this->autor . " | Páginas: " . $this->paginas;
    }

}

$PrimeiroFilme = new Livro("Star Wars: A Velha República", "Não Sei", 236);
$PrimeiroFilme->exibirInformacoes();

echo"<br><br>";

$SegundoFilme = new Livro("HeartStopper", "Não Sei", 233);
$SegundoFilme->exibirInformacoes();