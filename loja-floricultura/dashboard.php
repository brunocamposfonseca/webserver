<?php
    session_start();
    if(!isset($_SESSION['email']) and !isset($_SESSION['senha'])){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="shortcut icon" href="./images//setting.ico" type="image/x-icon">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <?php
            session_start();
            include_once('connection.php');
            if(isset($_SESSION["email"]) and isset($_SESSION["senha"])){
                $login = $_SESSION["email"];
                $sql = "SELECT * FROM cliente WHERE email = '$login'";
                $resultado = mysqli_query($conexao, $sql);
                if (mysqli_num_rows($resultado) > 0) {
                    $linha = mysqli_fetch_assoc($resultado);
                    $id = $linha['id'];
                    $nome = $linha['nome'];
                }
                print_r("<h1>Bem vindo, " . $nome . "😉</h1>");
            } else {
                header('location: index.php');
            }
        ?>
        <div class="buttons">
            <a href="logout.php"><button class="logout">Logout</button></a>
            <a href="cookie.php"><button class="save">Salvar dados</button></a>
            <a href="registration.php"><button class="reg">Painel de registro</button></a>
        </div>
    </div>
</body>
</html>

