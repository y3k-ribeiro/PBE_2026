<?php 

class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
    }

    public function adicionarItem($valor) {
        $this->valorItens += $valor;
    }

    public function getTotal(){
        return $this->valorItens;
    }

    public function exibirPedido(){
        echo "Cliente: ".$this->cliente . "<br>";
        echo "Total dos Itens: R$ ". $this->valorItens . "<br>";
    }
}

class NotaFiscal{
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido,$imposto = 0) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0;
    }

    public function calcularTotal(){
        $this->totalPagar = $this->totalPedido +
        ($this->totalPedido * $this->imposto / 100);
    }

    public function exibirNota(){
        echo "Subtotal: R$". $this->totalPedido . "<br>";
        echo "Imposto:". $this->imposto . "<br>";
        echo "Total a pagar: R$". $this->totalPagar."<br>";
    }
}

$pedido = new Pedido("Noemi");

$pedido->adicionarItem(30);
$pedido->adicionarItem(50);
$pedido->exibirPedido();

$nota = new NotaFiscal($pedido->getTotal(), 8);

$nota->calcularTotal();
$nota->exibirNota();

?>