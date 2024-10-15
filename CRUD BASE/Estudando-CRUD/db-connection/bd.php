<?php
//PHP Data Objects - PDO
//Data = dados, Objects = Objetos
//Objetos de dados


    $pdo = new PDO('mysql:host=localhost;dbname=testecrud','root','');

    //notificara um erro caso a pdo não seja bem sucedida(não recomendado para ambientes de produção)
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>