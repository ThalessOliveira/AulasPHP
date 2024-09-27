<?php
    include_once "../../conexao-system-os/bd.php";
    include_once "./valida.php";

    $id = $_GET["del_id"];

    $query = "DELETE FROM ordens_servico WHERE id = $id;";

    executar_sql($query);
    header("Location:consultarOS.php$paramAuth");


?>