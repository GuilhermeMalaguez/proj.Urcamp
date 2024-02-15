<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA DE LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" name="usuario" placeholder="Nome" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <button type="submit">Entrar</button>
            <a href="cadastroFront.php"><p>Cadastre-se</p></a>
        </form>
        <br><br>        
    </div>
</body>
</html>
