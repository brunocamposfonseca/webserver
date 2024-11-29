<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <h1>Login</h1>
        <form action="validate.php" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" placeholder="Insira seu usuário" required autofocus>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            session_start();
            if((isset($_SESSION["login"]) and isset($_SESSION["senha"])) or (isset($_COOKIE["login"]) and isset($_COOKIE["senha"]))){
                header('location: dashboard.php');
            }
        ?>
    </div>
</body>
</html>