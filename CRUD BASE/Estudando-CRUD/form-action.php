<?php
include_once "./db-connection/bd.php";

//prepare ------> preparando a instrução sql para evitar sql injection
if(isset($_POST['nome'])){
$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
}

if (empty($nome) || empty($email) || empty($senha)){
    echo "<script>alert('Preencha todos os campos!'); window.history.back();</script>";
    exit;
}

try{
    $sql = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?)");
    $sql -> execute(array(
        $nome, 
        $email,
        $senha
    ));
    echo 'inserido com sucesso!';
} catch (PDOException $e){
    if ($e->getCode() == 23000){
        echo "<script>alert('Email ja cadastrado!'); window.history.back();</script>";
        exit;
    } else {
        echo "<script>alert('Erro:".$e->getMessage()."'); window.history.back();</script>";
    }
}


    header("Location: select.php");


?>