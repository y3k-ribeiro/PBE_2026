<?php

class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        $this->saldo -= $valor;
    }

    public function exibirSaldo() {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.');
    }
}

$conta = new ContaBancaria("Noemi", 1000);

$conta->depositar(500);

$conta->sacar(200);

$conta->exibirSaldo();

?>
