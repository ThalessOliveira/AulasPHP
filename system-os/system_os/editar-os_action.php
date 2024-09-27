<?php
    include_once "../../conexao-system-os/bd.php";  
    

    $id = $_GET['id'];
    $usuario = $_GET['usuario'];
    $id_update = $_POST['id'];
    $dtAbertura = $_POST['dtAbertura'];
    $titulo = $_POST['titulo'];
    $segmento = $_POST['segmento'];
    $descricao = $_POST['descricao'];

    $query = "UPDATE ordens_servico SET dtAbertura='$dtAbertura', titulo='$titulo, segmento='$segmento', descricao='$descricao' WHERE id='$$id_update';";

    executar_sql($query);
    $param = "usuario=$nome_usuario&id=$id";

    header("Location:consultarOS.php?$param");
?>