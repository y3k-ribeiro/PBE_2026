<?php

class Pedido{
    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionarItem($valor){
        if($this->status == "Aguardando"){
            $this->valor = $this->valor + $valor;
        }else{
            echo "Não é possível adicionar itens. O pedido está $this->status <br>";
        } 
    }

    function cancelar(){
        $this->status = "Cancelado";
        echo "Status alterado para $this->status <br>";
    }

    function finalizar(){
        $this->status = "Finalizado";
        echo "Status alterado para $this->status <br>";
    }

    function exibirResumo(){
        echo "Número:". $this->numero ."<br>";
        echo "Cliente:". $this->cliente . "<br>";
        echo "Valor:R$ ". $this->valor ."<br>";
        echo "Status:".$this->status ."<br>";
    }
}

$pedido1 = new Pedido();
$pedido1->numero = 1001;
$pedido1->cliente = "Noemi";
$pedido1->valor = 0;
$pedido1->status = "Aguardando";

$pedido1->exibirResumo();
$pedido1->adicionarItem(50);
$pedido1->adicionarItem(30);
$pedido1->exibirResumo();
$pedido1->finalizar();
$pedido1->exibirResumo();
$pedido1->adicionarItem(20);

echo "<hr>";

$pedido2 = new Pedido();
$pedido2->numero = 1002;
$pedido2->cliente = "Júlia";
$pedido2->valor = 0;
$pedido2->status = "Aguardando";

$pedido2->exibirResumo();
$pedido2->adicionarItem(100);
$pedido2->adicionarItem(75);
$pedido2->exibirResumo();
$pedido2->finalizar();
$pedido2->exibirResumo();
$pedido2->adicionarItem(50);

echo "<hr>";