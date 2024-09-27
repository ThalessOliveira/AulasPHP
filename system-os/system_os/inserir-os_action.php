<?php
include_once "../../conexao-system-os/bd.php";
include_once "./valida.php";

$dtAbertura = $_POST["dtAbertura"];
$titulo = $_POST["titulo"];
$segmento = $_POST["segmento"];
$descricao = $_POST["descricao"];

$query = "INSERT INTO ordens_servico VALUES (Null, '$dtAbertura', '$titulo', '$segmento', '$descricao')";

$resposta = executar_sql($query);
header("Location:frmOrdemServico.php$paramAuth");

?>