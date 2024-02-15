<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA DE Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <br><br>
        <form action="cadastro.php" method="post">
            <input type="text" name="nome" placeholder="Nome" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <button type="submit">Cadastrar</button>
            <a href="index.php"><p>Fazer Login</p></a>
        </form>
    </div>
</body>
</html>
