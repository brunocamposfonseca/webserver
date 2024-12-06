<?php
    session_start();
    setcookie("email", $_SESSION["email"], time() + 7 * 24 * (60*60) , "./");
    setcookie("senha", $_SESSION["senha"], time() + 7 * 24 * (60*60) , "./");
    header('location: dashboard.php');
?>