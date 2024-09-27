<?php
include_once "../../conexao-system-os/bd.php";
$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "INSERT INTO usuarios VALUES (Null, '$cpf','$nome','$email','$senha')";


// como a função executar_sql($query) tem return é necessario atribuir a uma variavel o resultado

$resposta = executar_sql($query);
header("Location:frmLogin.php");
exit();
?>