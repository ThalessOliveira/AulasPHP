<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    $title = "Selecionando";
    ?>
    <title><?=$title?></title>
</head>
<body class="bg-secondary">
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle border rounded p-5 bg-dark text-center">

                <?php 
                
                    include_once "./db-connection/bd.php";

                    $sql = $pdo->prepare("SELECT * FROM usuarios");
                    $sql->execute();

                    $Usuarios = $sql->fetchAll();

                    if (empty($Usuarios)){
                        echo '<p class="text-light fw-bold">Nenhum Registro!!!</p>';
                    }

                    foreach($Usuarios as $Usuario => $value){
                    ?>
                        <p class="text-light">ID: <?=$value['id']?> | Nome: <?=$value['nome']?>  | E-Mail: <?=$value['email']?> </p>
                        <a href="excluir.php?del_id=<?=$value['id']?>" class="btn btn-outline-light">Excluir</a> 
                        <a href="index.php?edit_id=<?=$value['id']?>" class="btn btn-outline-light">Editar</a>
                        <hr class="text-light">
                    <?php
                    }
                    ?>
                    <a href="index.php" class="btn btn-outline-light">Adicionar</a>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>