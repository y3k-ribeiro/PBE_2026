
<?php

class Turma {

    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function __construct($nome, $professor, $capacidade) {
        $this->nome = $nome;
        $this->professor = $professor;
        $this->capacidade = $capacidade;
        $this->qtdAlunos = 0;
    }

    public function adicionarAluno() {
        if ($this->qtdAlunos < $this->capacidade) {
            $this->qtdAlunos++;
            echo "Aluno adicionado com sucesso!<br>";
        } else {
            echo "Turma lotada!<br>";
        }
    }

    public function removerAluno() {
        if ($this->qtdAlunos > 0) {
            $this->qtdAlunos--;
            echo "Aluno removido com sucesso!<br>";
        } else {
            echo "Não há alunos para remover!<br>";
        }
    }

    public function exibirTurma() {
        echo "Turma: " . $this->nome . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Alunos: " . $this->qtdAlunos . 
             " / " . $this->capacidade . "<br>";
    }
}

$turma = new Turma("PHP OO", "Noemi", 32);

$turma->adicionarAluno();
$turma->adicionarAluno();
$turma->adicionarAluno();

$turma->removerAluno();

$turma->exibirTurma();

?>
