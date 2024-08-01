<?php
    
    $limiteMinimo = $_POST["Minimo"];
    $limiteMaximo = $_POST["Maximo"];

    if ($limiteMinimo > $limiteMaximo){
        echo "Erro: Limite minimo é maior que o limite máximo";
        exit;
    }
    if (!isset($limiteMinimo) || is_null($limiteMinimo) || empty($limiteMinimo)){
        $limiteMinimo = 0;
    }
    if (!isset($limiteMaximo) || is_null($limiteMaximo) || empty($limiteMaximo)){
        $limiteMaximo = 100;
    }

    $numeroSorteado = rand($limiteMinimo, $limiteMaximo);

    echo "<h3> Numero Sorteado: $numeroSorteado </h3>";
?>