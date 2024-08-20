<?php
    //Declarando Variáveis

    $nomeAluno = $_POST["nome"]; //tudo que vem do POST vem como Array []
    // vai pegar pelo name(name="nome")
    $disciplina = $_POST["disciplina"];
    $quantidadeNotas = 4;
    $somaNotas = 0;

    for ($i = 1; $i<=$quantidadeNotas; $i++){
        $nota = floatval($_POST["nota$i"]); //floatval Converte para um tipo REAL = Parse Float 
        //["nota$i"] nota1, nota2, nota3, nota de acordo com índice
        if ($nota < 0 || $nota > 10){
            echo "ERRO!!! Nota da disciplina $disciplina inválida. Digite um valor válido!!!";
        exit; // exit PARA O LOOP (FOR)
        }
        $somaNotas += $nota;
    }
    $mediaFinal = $somaNotas / $quantidadeNotas;

    echo "<h3>Resultado para $nomeAluno</h3>";
    echo "<h4>Disciplina $disciplina é:</h4>";
    echo "<p><b>Média: $mediaFinal</b></p>";


?>