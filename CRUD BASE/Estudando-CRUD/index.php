<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    if(isset($_GET['edit_id'])){
        $title = "Editando";
        $submeter = "editar.php";
        $id_atualizar = $_GET['edit_id'];

        include_once "./db-connection/bd.php";

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = $id_atualizar");
        $sql->execute();

        $Usuario = $sql->fetchAll();
        $Usuario = $Usuario[0];

       // print_r($Usuario);

    } else {
        $title = "Adicionando";
        $submeter = "form-action.php";
    };
    ?>
    <title><?=$title?></title>
</head>
<body class="bg-secondary">
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle border rounded p-5 bg-dark text-center">

                <form action="<?=$submeter?>" method="POST">
                    <input type="hidden" name="id_atualizar" value="<?=isset($id_atualizar)?$id_atualizar:''?>">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="nome">Nome</span>
                  <input type="text" class="form-control" name="nome" value="<?=isset($Usuario['nome'])?$Usuario['nome']:''?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="email">Email</span>
                  <input type="email" class="form-control" name="email" value="<?=isset($Usuario['email'])?$Usuario['email']:''?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text" id="senha">Senha</span>
                  <input type="password" class="form-control" value="<?=isset($Usuario['senha_hash'])?$Usuario['senha_hash']:''?>" name="senha" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <button class="btn btn-outline-light">Enviar</button>
                <a href="select.php" class="btn btn-outline-light">Ver</a>
                </form>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>