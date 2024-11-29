<?php
    session_start();
    if (isset($_POST["login"]) and isset($_POST["senha"])) {
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $loginCerto = "Bruno";
        $senhaCerta = 123456;


        if ($login == $loginCerto and $senha == $senhaCerta) {
            $_SESSION["login"] = $login;
            $_SESSION["senha"] = $senha;
        }

        if (isset($_SESSION["login"]) and isset($_SESSION["senha"])) {
            header('location: dashboard.php');
        } else {
            header('location: index.php');
        }
    }
?>