<?php
$nome = $_POST['nome'];
$numero = $_POST['numero'];

if ($numero == 0){
    echo "$nome Número $numero não é primo";
    exit;
}
if (!isset($nome) || is_null($nome) || empty($nome)){
    echo 'Preencha os campos!!!';
    exit;
}
if (!isset($numero) || is_null($numero) || empty($numero)){
    echo 'Preencha os campos!!!';
    exit;
}

if ($numero % 2 == 0 || $numero % 3 == 0 || $numero % 5 == 0){
    echo "$nome Número $numero não é primo";
    exit;
}
else{
    echo "$nome Número $numero é primo";
}

?>