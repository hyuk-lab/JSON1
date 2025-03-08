<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario para gerar json</title>
</head>

<body>
    <h1>Formulário para gerar JSON</h1>

    <form action="processar.php" method="post">
        <h1>Aluno:</h1>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" required><br><br>

        <label for="email">E-mail:</label>
        <input type="text" name="email" required><br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" required><br><br>

        <h2>Disciplina:</h2>
        <label for="matematica">Matematica:</label>
        <select name="matematica" required>
            <option value="Aprovado">Aprovado</option>
            <option value="Reprovado">Reprovado</option>
        </select>
        <br>
        <br>
        <label for="Portugues">Portugues:</label>
        <select name="portugues" required>
            <option value="Aprovado">Aprovado</option>
            <option value="Reprovado">Reprovado</option>
        </select>
        <br>
        <br>
        <label for="Historia">Historia:</label>
        <select name="historia" required>
            <option value="Aprovado">Aprovado</option>
            <option value="Reprovado">Reprovado</option>
        </select>
        <br>
        <br>

        <input type="submit" value="Gerar JSON">

    </form>

</body>

</html>