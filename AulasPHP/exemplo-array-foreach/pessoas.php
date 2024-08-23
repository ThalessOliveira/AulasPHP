<?php


$people = [
    ['name' => 'João', 'age' => 25, 'gender' => 'homem'],
    ['name' => 'Maria', 'age' => 30, 'gender' => 'mulher'],
    ['name' => 'Pedro', 'age' => 35, 'gender' => 'homem'],
    ['name' => 'José', 'age' => 40, 'gender' => 'homem'],
    ['name' => 'Ana', 'age' => 20, 'gender' => 'mulher'],
];


echo "Todos os dados do array:<br>";
foreach ($people as $person) {
    echo "Nome: " . $person['name'] . ", Idade: " . $person['age'] . ", Gênero: " . $person['gender'] . "<br>";
}


echo "<br>População com mais de 30 anos:<br>";
foreach ($people as $person) {
    if ($person['age'] > 30) {
        echo "Nome: " . $person['name'] . ", Idade: " . $person['age'] . "<br>";
    }
}


echo "<br>Pessoas homens:<br>";
foreach ($people as $person) {
    if ($person['gender'] == 'homem') {
        echo "Nome: " . $person['name'] . ", Gênero: " . $person['gender'] . "<br>";
    }
}   1

?>