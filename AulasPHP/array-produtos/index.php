<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Bem-Vindo a Loja de Produtos</h1>
    <form action="./produtos.php" method="POST">
        <label for="id">ID Produto</label>
        <input type="text" name="id">
        <label for="nome">Nome Produto</label>
        <input type="text" name="nome">
        <label for="preco">Preço do Produto</label>
        <input type="text" name="preco">
        <button>Enviar</button>
    </form>
</body>
</html>