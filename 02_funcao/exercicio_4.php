<?php
function analisarNotas($nota1,$nota2,$nota3){
    $media=($nota1+$nota2+$nota3)/3;

    if ($media >= 7){
        $situacao="Aprovado";
    }
    else if ($media >=5 and $media <7){
        $situacao="Recuperação";
    }else{
        $situacao="Reprovado";
    }

    $maiorNota=max($nota1,$nota2,$nota3);
    $menorNota=min($nota1,$nota2,$nota3);
    return[
        "media"=>$media,
        "situacao"=>$situacao,
        "maiorNota"=>$maiorNota,
        "menorNota"=>$menorNota
    ];
}