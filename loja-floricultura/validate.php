<?php
    session_start();
    if (isset($_POST["login"]) and isset($_POST["senha"])) {
        include_once('connection.php');
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM cliente WHERE email = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            $linha = mysqli_fetch_assoc($resultado);
            $_SESSION["email"] = $linha['email'];
            $_SESSION["senha"] = $linha['senha'];
        } else {
            $_SESSION['erro'] = "Email ou senha inváida. Tente novamente....";
        }

        if (isset($_SESSION["email"]) and isset($_SESSION["senha"])) {
            header('location: dashboard.php');
        } else {
            header('location: index.php');
        }
    }
?>