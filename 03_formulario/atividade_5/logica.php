<?php

$nome = $_POST['nome'];
$peso_kg = $_POST['peso_kg'];
$altura = $_POST['altura'];

$altura = $altura * 100;
$imc = $altura * $altura  / $peso_kg;

require_once "view_relatorio.php";

?>