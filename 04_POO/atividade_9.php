<?php

class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {

        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;

            echo "Venda de $quantidade unidade(s) de {$this->nome} realizada!<br>";
        } else {
            echo "Estoque insuficiente para realizar a venda.<br>";
        }
    }

    public function reajustarPreco($percentual) {

        $this->preco += $this->preco * ($percentual / 100);
    }

    public function exibirInfo() {

        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
        echo "Estoque: {$this->estoque} unidade(s)<br>";
    }
}


$produto = new Produto("Teclado Gamer", 250, 10);

$produto->vender(2);

$produto->reajustarPreco(10);

$produto->exibirInfo();

?>