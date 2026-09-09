<?php

require_once "funcao.php";

// invocando/executendo a função
//que esta no arquivo funcao.php

$resultado = calcularPedido("Teclado",100, 10, 5, 7);

echo "Nome: " . $resultado["nomeProduto"] . "<br>";
echo "SubTotal:" . $resultado["subTotal"] . "<br>";
echo "Desconto: " .$resultado["valorDesconto"] . "<br>";
echo "Imposto:  " . $resultado["valorImposto"] . "<br>";
echo "Total final:  " . $resultado["totalFinal"] . "<br>";
// invocando/executando a funcao de calculo de frete

$TotalComFrete = calculoFrete($resultado['totalFinal']);
echo "Total com Frete:". $TotalComFrete; 

?>