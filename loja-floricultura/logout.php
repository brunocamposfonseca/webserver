<?php
    session_start();
    session_unset();
    setcookie("email", $_SESSION["email"], -604800, './');
    setcookie("senha", $_SESSION["senha"], -604800, './');
    session_destroy();
    header('location: index.php');
?>