<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["login"]) and isset($_SESSION["senha"])){
            echo "<br>";
            print_r($_SESSION["login"]);
            echo "<br>";
            print_r($_SESSION["senha"]);
        } else {
            header('location: index.php');
        }
    ?>
    <br>
    <br>
    <a href="logout.php"><button>Logout</button></a> <a href="cookie.php"><button>Salvar dados</button></a>
</body>
</html>

