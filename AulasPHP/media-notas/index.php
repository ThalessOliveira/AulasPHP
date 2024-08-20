<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Média de notas</h1>
    <form action="./media.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome">
        <label for="disciplina">Disciplina</label>
        <input type="text" name="disciplina" placeholder="Digite a disciplina">
        <fieldset>
            <legend>Notas da disciplina</legend>
            <div>
                <label for="nota1">Nota 1</label>
                <input type="number" name="nota1" min="0" max="10" required>
            </div>
            <div>
                <label for="nota2">Nota 2</label>
                <input type="number" name="nota2" min="0" max="10" required>
            </div>
            <div>
                <label for="nota3">Nota 3</label>
                <input type="number" name="nota3" min="0" max="10" required>
            </div>
            <div>
                <label for="nota4">Nota 4</label>
                <input type="number" name="nota4" min="0" max="10" required>
            </div>
            <div>
                <button>Calcular</button>
            </div>
        </fieldset>
    </form>
</body>
</html>