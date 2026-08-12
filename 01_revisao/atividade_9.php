<?php

$idade = 15;
$acompanhada = true;

if($idade >= 18){
    echo "Entrada liberada!";
}
else if($idade >= 14 && $idade <= 17 && $acompanhada == true){
    echo "Entrada liberada com acompanhante!";
}
else if($idade >= 14 && $idade <= 17 && $acompanhada == false){
    echo "Entrada negada!";
}
else if($idade <= 14 && $acompanhada == true){
    echo "Entrada negada!";
}
else if ($idade <= 14 && $acompanhada == false){
    echo "Entrada negada!";
}
echo "<br> <br> <br >Proibido para menores de 14 anos!";
?>