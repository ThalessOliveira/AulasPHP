<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];

    $produtos = array(
        ['Id' => $id, 'Nome' => $nome, 'Preco' => $preco]
    );

    echo "<h1>Exibindo Produto</h1>";
    foreach ($produtos as $produto) {
        echo "<p>ID: " . $produto["Id"] . "<br> Nome: " . $produto["Nome"] ."<br> Preço: ". $produto["Preco"] . "</p>"; 
    }

?>