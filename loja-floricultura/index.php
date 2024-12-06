<?php  session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images//user.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    <div class="containerx">
        <h1>Login</h1>
        <form action="validate.php" method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" placeholder="Insira seu usuário" required autofocus>
            <br>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
            <br>
            <input type="submit" value="Enviar">
            <?php 
                if(isset($_SESSION['erro'])){
                    $erro = $_SESSION['erro'];
                    echo "<p style='color:red;'>$erro</p>";
                }
                unset($_SESSION['erro']);
            ?>
        </form>
        <?php
           
            if((isset($_SESSION["email?"]) and isset($_SESSION["senha"])) or (isset($_COOKIE["email"]) and isset($_COOKIE["senha"]))){
                if(!isset($_SESSION["email"])){
                    $_SESSION["email"] = $_COOKIE["email"];
                    $_SESSION["senha"] = $_COOKIE["senha"];
                    header('location: dashboard.php');
                }
                header('location: dashboard.php');
            }
        ?>
    </div>
</body>
</html>