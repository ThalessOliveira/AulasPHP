<?php

try {
    if(isset($_GET['del_id'])){
        include_once "./db-connection/bd.php";
        $id_delete = $_GET['del_id'];
    
        $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $sql->execute([$id_delete]);
    
        header("Location: select.php?excluido%20com%20sucesso!!!");
    };
} catch (PDOException $e){
        echo "<script>alert('Erro ao excluir registro: ".$e->getMessage()."'); window.history.back();</script>";
}

?>