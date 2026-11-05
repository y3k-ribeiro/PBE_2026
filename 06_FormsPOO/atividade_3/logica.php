<?php

require_once "Funcionario.php";

// Receber os dados do formulário
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$horasExtras = $_POST['horasExtras'];
$valeTransporte = $_POST['valeTransporte'];

// Criar o objeto funcionário
$funcionario = new Funcionario(
    $nome,
    $cargo,
    $horasExtras,
    $valeTransporte
);

// Chamar o relatório
include "view_relatorio.php";

?>
