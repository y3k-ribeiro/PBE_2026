<?php
require_once "Pessoa.php";
class Professor extends Pessoa{
    private $disciplina;

    public function __construt($nome, $email, $disciplina){
        $this->disciplina = $disciplina;
// executa o construtor da classe Pessoa
// passando os seus atributos
        parent::__construt($nome, $email);
    }

// método para buscar a disciplina
    public function getDisciplina(){
        return $this->disciplina;
    }
// exibir todos os dados do professor
    public function exibirDadosProfessor(){
        perent::exibirDadosPessoa();
        echo "Disciplina: $this->disciplina <br><hr>";
    }
}