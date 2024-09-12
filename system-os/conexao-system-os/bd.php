<?php

    $db_connection['hostname'] = "localhost";
    $db_connection['database'] = "system_os";
    $db_connection['username'] = "root";
    $db_connection['password'] = "";

    // Faz a conexão com o banco de dados
    $mysqli = new mysqli(
        $db_connection['hostname'],
        $db_connection['username'],
        $db_connection['password'],
        $db_connection['database']
    );
    if (mysqli_connect_errno()) {
        echo "<p>Não foi possível conectar-se ao servidor MySQL.</p>\n" 
            .
            "<p><strong>Erro MySQL: "
            .
            trigger_error(mysqli_connect_error())
            .
            "</strong></p>\n";
            exit();
    } else {
        echo "Conectado ao banco...";
    }

    function executar_sql($query){
        global $mysqli;
        $result_sql = $mysqli->query($query);
        if (!mysqli_error($mysqli)){
            return($result_sql);
        }else{
            echo "<p>Não foi possível executar o comando SQL.</p>\n"
            .
            "<p><strong>Erro MySQL: " . mysqli_error($mysqli) . "</strong></p>\n"
            .
            "<hr />"
            . 
            "<h1>Query com erro:</h1>"
            . 
            $query;
        exit();
        }
    }
?>