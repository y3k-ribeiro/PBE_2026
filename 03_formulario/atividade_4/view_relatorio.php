<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 01</title>
</head>
<body>
    <h1>Resutado do Aluno</h1>

    <p><b>Nome:</b><?=$nome ?></p>
    <p><b>Nota 1:</b><?=$nota1 ?></p>
    <p><b>Nota 2:</b><?=$nota2 ?></p>
    <p><b>Nota 3:</b><?=$nota3 ?></p>
    <p><b>Média:</b><?=$media ?></p>
    

    <?php
        if($media = 10):
            $media == 10?>
            <h3>Aprovado <br>Você atingiu a nota máxima</h3>
    <?php
        elseif($media >= 7):?>
            <h3>Aprovado</h3>
    <?php
        elseif($media < 7 ):?>
            <h3>Reprovado</h3>
    <?php endif ?>
    
</body>
</html>