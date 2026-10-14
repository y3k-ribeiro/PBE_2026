<?php

class Filme {

    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao, $assistido = false) {

        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = $assistido;

    }

    public function marcarComoAssistido() {

        $this->assistido = true;

    }

    public function exibirInformacoes() {

        echo "Título: " . $this->titulo . "<br>";
        echo "Gênero: " . $this->genero . "<br>";
        echo "Duração: " . $this->duracao . " min<br>";

        if ($this->assistido == true) {
            echo "Assistido: Sim<br>";
        } else {
            echo "Assistido: Não<br>";
        }

        $this->foiAssistido();

    }

    public function foiAssistido() {

        if ($this->assistido == true) {
            echo "Você já assistiu.";
        } else {
            echo "Você ainda não assistiu.";
        }

    }

}

$filme1 = new Filme("Matrix", "Ficção", 145);
$filme2 = new Filme("Harry Potter", "Ficção", 200);

$filme2->marcarComoAssistido();

$filme1->exibirInformacoes();

echo "<br>--------------------<br>";

$filme2->exibirInformacoes();

?>