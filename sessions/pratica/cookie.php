<?php
    session_start();
    setcookie("login", $_SESSION["login"], time() + 7 * 24 * (60*60) , "/sessions/pratica/");
    setcookie("senha", $_SESSION["senha"], time() + 7 * 24 * (60*60) , "/sessions/pratica/");
    header('location: dashboard.php');
?>