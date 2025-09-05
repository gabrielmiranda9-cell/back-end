<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Nota</title>
</head>
<body>
    <h2>Informe a disciplina e a nota</h2>
    <form action="calcula_nota.php" method="post">
        <label>Disciplina:</label>
        <input type="text" name="disciplina" required><br><br>

        <label>Nota:</label>
        <input type="number" name="nota" step="0.01" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>