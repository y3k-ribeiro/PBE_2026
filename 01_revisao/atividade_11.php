<?php
$maior = -9999;
$numeros = [10,3,55,9,67,8,12,77,30];

foreach ($numeros as $numero) {
   if($numero > $maior){
    $maior=$numero;
   }
}
echo "O maior número é = ". $maior;
?>