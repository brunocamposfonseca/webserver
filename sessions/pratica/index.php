<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="validate.php" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login">
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>