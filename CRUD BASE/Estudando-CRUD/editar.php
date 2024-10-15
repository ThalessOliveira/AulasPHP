<?php
include_once "./db-connection/bd.php";

if(isset($_POST['nome'])){
    $id_atualizar = trim($_POST['id_atualizar']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    };

if (empty($nome) || empty($email) || empty($senha)){
    echo "<script>alert('Preencha todos os campos!'); window.history.back();</script>";
    exit;
}
try{


    $sql = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ?, senha_hash = ? WHERE id = $id_atualizar;");
    $sql -> execute(array(
        $nome, 
        $email,
        $senha
    ));


} 

catch (PDOException $e){
    if($e->getCode() == 23000){
        echo "<script>alert('Email ja cadastrado!'); window.history.back();</script>";
        exit;
    } else {
        echo "<script>alert('Erro:".$e->getMessage()."'); window.history.back();</script>";
    }
}   
header("Location:select.php")

?>