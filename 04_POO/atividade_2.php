<?php

class Conta{
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "O saldo aumentou para $this->saldo <br>";
    }

    function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "O saldo resultou em $this->saldo <br>";
    }

    function consultarSaldo(){
        echo "O valor do saldo é de $this->saldo <br>";
    }
    

}
$conta1 = new Conta();
echo "<br> Conta 01 <br>";
$conta1->titular = "Noemi Ribeiro";
$conta1->numero = "123";
$conta1->saldo = 300;
$conta1->tipo = "c/c";

$conta1->consultarSaldo();
$conta1->sacar(200);
$conta1->consultarSaldo();

echo "<br> Conta 02 <br>";
$conta2 = new Conta();
$conta2->titular = "Júlia Andrade";
$conta2->numero = "456";
$conta2->saldo = 5000;
$conta2->tipo = "c/c";

$conta2->consultarSaldo();
$conta2->sacar(100);
$conta2->consultarSaldo();


?>