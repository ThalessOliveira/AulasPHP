<?php
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    if (!isset($titulo) || is_null($titulo) || empty($titulo)){
        echo 'Insira valores válidos';
        exit();
    }

    if (!isset($descricao) || is_null($descricao) || empty($descricao)){
        echo 'Insira valores válidos';
        exit();
    };

$matriz[] = array(
        $titulo,
        $descricao
    );

echo $matriz[0][0];
echo '<br>';
echo $matriz[0][1];
echo '<br>';
echo '<button><a href="index.php">Voltar</a></button>'

?>