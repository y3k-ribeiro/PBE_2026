<?php
session_start();

/*
 * Tabela de preços.
 * O valor depende do serviço + porte do pet.
 */
function obterPrecos(): array
{
    return [
        'banho' => [
            'pequeno' => 50,
            'medio'   => 70,
            'grande'  => 90
        ],
        'tosa' => [
            'pequeno' => 60,
            'medio'   => 80,
            'grande'  => 100
        ],
        'unhas' => [
            'pequeno' => 20,
            'medio'   => 25,
            'grande'  => 30
        ],
        'hidratacao' => [
            'pequeno' => 35,
            'medio'   => 45,
            'grande'  => 55
        ]
    ];
}

/*
 * Calcula o valor total de todos os serviços selecionados.
 */
function calcularTotal(array $servicos, string $porte): float
{
    $precos = obterPrecos();
    $total = 0;

    foreach ($servicos as $servico) {
        if (isset($precos[$servico][$porte])) {
            $total += $precos[$servico][$porte];
        }
    }

    return $total;
}

/*
 * Processamento do cadastro.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomeCliente = trim($_POST['nome_cliente'] ?? '');
    $telefone    = trim($_POST['telefone'] ?? '');
    $nomePet     = trim($_POST['nome_pet'] ?? '');
    $porte       = $_POST['porte'] ?? '';
    $servicos    = $_POST['servicos'] ?? [];

    $portesValidos = ['pequeno', 'medio', 'grande'];
    $servicosValidos = array_keys(obterPrecos());

    if (
        $nomeCliente === '' ||
        $telefone === '' ||
        $nomePet === '' ||
        !in_array($porte, $portesValidos, true) ||
        !is_array($servicos) ||
        count($servicos) === 0
    ) {
        exit('Preencha todos os campos e selecione pelo menos um serviço.');
    }

    // Mantém somente serviços válidos.
    $servicos = array_values(array_intersect($servicos, $servicosValidos));

    if (count($servicos) === 0) {
        exit('Nenhum serviço válido foi selecionado.');
    }

    $total = calcularTotal($servicos, $porte);
    $precos = obterPrecos();

    $_SESSION['relatorio'] = [
        'nome_cliente' => htmlspecialchars($nomeCliente, ENT_QUOTES, 'UTF-8'),
        'telefone' => htmlspecialchars($telefone, ENT_QUOTES, 'UTF-8'),
        'nome_pet' => htmlspecialchars($nomePet, ENT_QUOTES, 'UTF-8'),
        'porte' => $porte,
        'servicos' => $servicos,
        'precos' => $precos,
        'total' => $total
    ];

    header('Location: view_relatorio.php');
    exit;
}
?>

