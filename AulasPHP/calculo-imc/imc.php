<?php
$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

if ($peso == 0 || $altura == 0) {
    echo  'Digite valores diferentes de 0!!!';
    exit();
} 

if (!isset($nome) || is_null($nome) || empty($nome)) {
    echo 'Preencha os campos!!!';
    exit();
}

if (!isset($peso) || is_null($peso) || empty($peso)) {
    echo 'Preencha os campos!!!';
    exit();
}

if (!isset($altura) || is_null($altura) || empty($altura)) {
    echo 'Preencha os campos!!!';
    exit();
}
$imc = $peso / ($altura * $altura);
echo "<h2> $nome seu imc é de $imc .</h2>";
?>