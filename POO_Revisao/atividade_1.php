<?php

class Aluno{
    private $nome;
    private $nota;

    public function __construct($nome, $nota = 0){
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function getStatus(){
        if ($this->nota >= 6) {
            return "Aprovado";
        } else {
            return "Reprovado";

        }
    }
}

$aluno1 = new Aluno("Murilo",5);
$aluno2 = new Aluno("Manuela",10);

echo "<pre>";
print_r($aluno1);
print_r($aluno2);
echo "</pre>";

echo "Murilo:". $aluno1->getStatus() . "<br>";
echo "Manuela: " . $aluno2->getStatus();

?>