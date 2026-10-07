<?php
class Aula{

    public $disciplina;
    public $professor;
    public $duracao;
    public $n_sala;
    public $bloco;

    function exibirInformações(){
        echo "Disciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Número da Sala: $this->n_sala <br>";
        echo "Bloco: $this->bloco <br>";

    }

    function trocarProfessor($nome_professor){
        $this->professor = $nome_professor;
        echo"O novo professor é $this->professor <br>";
    }

    function alterarLocal($novo_bloco, $novo_numero_sala){
        $this->n_sala = $novo_numero_sala;
        $this->bloco = $novo_bloco;

        echo "O novo local é $this->bloco $this->n_sala <br>";
    }
}

$aula1 = new Aula();
$aula1->disciplina = "Programação";
$aula1->professor = "Leonardo";
$aula1->duracao = 4;
$aula1->n_aula = 5;
$aula1->bloco = "Anexo";

$aula1->exibirInformações();
echo "<hr>";
$aula1->trocarProfessor("Gabriel");
echo "<hr>";
$aula1->alterarLocal("B", 10);
echo "<hr>";
$aula1->exibirInformações();

echo "<hr>";

$aula2 = new Aula();
$aula2->disciplina = "Filosofia";
$aula2->professor = "Gustavo";
$aula2->duracao = 2;
$aula2->n_aula = 5;
$aula2->bloco = "Anexo";

$aula2->exibirInformações();
echo "<hr>";
$aula2->trocarProfessor("Renato");
echo "<hr>";
$aula2->alterarLocal("A", 11);
echo "<hr>";
$aula2->exibirInformações();



