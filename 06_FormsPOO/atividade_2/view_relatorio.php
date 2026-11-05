<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim Escolar</title>
</head>
<body>

    <h1>Boletim Escolar</h1>

    <h2>Aluno: <?= htmlspecialchars($aluno->getNome()) ?></h2>

    <p>Turma: <?= htmlspecialchars($aluno->getTurma()) ?></p>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Média</th>
        </tr>

        <tr>
            <td><?= number_format($aluno->getNota1(), 1, ',', '.') ?></td>

            <td><?= number_format($aluno->getNota2(), 1, ',', '.') ?></td>

            <td><?= number_format($aluno->getNota3(), 1, ',', '.') ?></td>

            <td><?= number_format($aluno->calcularMedia(), 1, ',', '.') ?></td>
        </tr>
    </table>

    <p>
        Faltas:
        <?= $aluno->getFaltas() ?>
    </p>

    <p>
        Frequência:
        <?= number_format($aluno->calcularFrequencia(), 1, ',', '.') ?>%
    </p>

    <h2>
        Situação: <?= $aluno->verificarSituacao() ?>
    </h2>

    <?php if ($aluno->verificarSituacao() == "Aprovado"): ?>

        <p>Parabéns, continue assim!</p>

    <?php else: ?>

        <p>Atenção: procure o professor para saber os próximos passos.</p>

    <?php endif; ?>

    <br>

    <a href="view.php">Cadastrar outro aluno</a>

</body>
</html>
