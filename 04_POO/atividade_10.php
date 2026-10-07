<?php

class Carro {

    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {

        if ($litros > 0) {
            $this->tanque += $litros;

            echo "Abastecidos " . $litros . " litro(s) no " . $this->modelo . ".<br>";
        } else {
            echo "Erro: a quantidade de litros deve ser positiva.<br>";
        }
    }

    public function dirigir($km) {

        $combustivelNecessario = $km / $this->consumo;

        if ($combustivelNecessario <= $this->tanque) {

            $this->tanque -= $combustivelNecessario;

            echo "O carro " . $this->modelo .
                 " percorreu " . $km .
                 " km e consumiu " .
                 number_format($combustivelNecessario, 2, ',', '.') .
                 " litros.<br>";

        } else {

            echo "Impossível percorrer " . $km .
                 " km: combustível insuficiente.<br>";
        }
    }

    public function exibirInfo() {

        echo "Modelo: " . $this->modelo .
             " | Consumo: " . $this->consumo .
             " km/L | Tanque: " .
             number_format($this->tanque, 2, ',', '.') .
             " L<br>";
    }
}


$carro = new Carro("Honda Civic", 12, 20);

$carro->exibirInfo();

$carro->dirigir(60);

$carro->abastecer(10);

$carro->exibirInfo();

?>