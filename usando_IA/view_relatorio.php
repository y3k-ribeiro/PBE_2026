<?php
session_start();

if (!isset($_SESSION['relatorio'])) {
    header('Location: view.php');
    exit;
}

$dados = $_SESSION['relatorio'];

$nomesServicos = [
    'banho' => 'Banho',
    'tosa' => 'Tosa',
    'unhas' => 'Corte de unhas',
    'hidratacao' => 'Hidratação'
];

$nomesPortes = [
    'pequeno' => 'Pequeno',
    'medio' => 'Médio',
    'grande' => 'Grande'
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLove - Relatório</title>
    <style>
        :root {
            --cor-principal: #7B2CBF;
            --cor-secundaria: #C77DFF;
            --cor-destaque: #FFB703;
            --cor-fundo: #F8F5FF;
            --cor-texto: #292333;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--cor-fundo);
            color: var(--cor-texto);
        }

        .topo {
            background: linear-gradient(135deg, var(--cor-principal), var(--cor-secundaria));
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        .relatorio {
            width: min(850px, 92%);
            margin: 35px auto;
            background: white;
            padding: 30px;
            border-radius: 22px;
            box-shadow: 0 8px 25px rgba(75, 30, 110, .12);
        }

        .dados {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin: 20px 0;
        }

        .dado {
            background: #faf7ff;
            padding: 15px;
            border-radius: 12px;
        }

        .dado strong {
            display: block;
            color: var(--cor-principal);
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        th {
            background: var(--cor-principal);
            color: white;
        }

        .total {
            margin-top: 25px;
            padding: 22px;
            background: var(--cor-destaque);
            border-radius: 15px;
            text-align: center;
            font-size: 25px;
            font-weight: bold;
        }

        .acoes {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .botao {
            flex: 1;
            padding: 14px;
            border-radius: 12px;
            text-align: center;
            text-decoration: none;
            border: 0;
            cursor: pointer;
            font-weight: bold;
        }

        .voltar {
            background: #eee;
            color: #333;
        }

        .imprimir {
            background: var(--cor-principal);
            color: white;
        }

        @media (max-width: 650px) {
            .dados, .acoes { grid-template-columns: 1fr; flex-direction: column; }
        }

        @media print {
            .acoes { display: none; }
            body { background: white; }
            .relatorio { box-shadow: none; }
        }
    </style>
</head>
<body>

<div class="topo">
    <h1>🐾 PetLove</h1>
    <p>Relatório do atendimento</p>
</div>

<main class="relatorio">
    <h2>Cadastro realizado com sucesso! ✅</h2>

    <div class="dados">
        <div class="dado">
            <strong>Cliente</strong>
            <?= $dados['nome_cliente'] ?>
        </div>

        <div class="dado">
            <strong>Telefone</strong>
            <?= $dados['telefone'] ?>
        </div>

        <div class="dado">
            <strong>Pet</strong>
            <?= $dados['nome_pet'] ?>
        </div>

        <div class="dado">
            <strong>Porte</strong>
            <?= $nomesPortes[$dados['porte']] ?>
        </div>
    </div>

    <h2>Serviços selecionados</h2>

    <table>
        <thead>
            <tr>
                <th>Serviço</th>
                <th>Porte</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados['servicos'] as $servico): ?>
                <tr>
                    <td><?= $nomesServicos[$servico] ?></td>
                    <td><?= $nomesPortes[$dados['porte']] ?></td>
                    <td>
                        R$ <?= number_format(
                            $dados['precos'][$servico][$dados['porte']],
                            2,
                            ',',
                            '.'
                        ) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="total">
        Total: R$ <?= number_format($dados['total'], 2, ',', '.') ?>
    </div>

    <div class="acoes">
        <a class="botao voltar" href="view.php">← Novo cadastro</a>
        <button class="botao imprimir" onclick="window.print()">🖨️ Imprimir relatório</button>
    </div>
</main>

</body>
</html>
