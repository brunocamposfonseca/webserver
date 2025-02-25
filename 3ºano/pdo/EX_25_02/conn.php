<?php
    session_start();
    $db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");

    if(isset($_POST["name"]) and isset($_POST["email"])){
        $state = $db->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");
        $name = $_POST["name"];
        $email = $_POST["email"];
        $state->execute(array($name, $email));
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        header("location: dashboard.php");
    }
?>