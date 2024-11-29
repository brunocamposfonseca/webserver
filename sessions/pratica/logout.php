<?php
    session_start();
    session_unset();
    setcookie("login", $_SESSION["login"], -3600, '/sessions/pratica/');
    setcookie("senha", $_SESSION["senha"], -3600, '/sessions/pratica/');
    print_r($_SESSION);
    session_destroy();
    header('location: index.php');
?>