<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <?php
            session_start();
            if(isset($_SESSION["login"]) and isset($_SESSION["senha"])){
                print_r("<h1>Bem vindo, " . $_SESSION["login"] . "😉</h1>");
            } else {
                header('location: index.php');
            }
        ?>
        <div class="buttons">
            <a href="logout.php"><button class="logout">Logout</button></a>
            <a href="cookie.php"><button class="save">Salvar dados</button></a>
        </div>
    </div>
</body>
</html>

