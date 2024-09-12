<?php
include_once "../../conexao-system-os/bd.php";

$titulo = $_POST["titulo"];
$segmento = $_POST["segmento"];
$descricao = $_POST["descricao"];

$query = "INSERT INTO ordens_servico VALUES (Null, '$titulo', '$segmento', '$descricao')";

$resposta = executar_sql($query);
echo $resposta

?>