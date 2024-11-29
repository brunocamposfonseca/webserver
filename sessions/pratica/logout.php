<?php
    session_start();
    session_unset();
    setcookie("login", $_SESSION["login"], -604800, '/sessions/pratica/');
    setcookie("senha", $_SESSION["senha"], -604800, '/sessions/pratica/');
    session_destroy();
    header('location: index.php');
?>