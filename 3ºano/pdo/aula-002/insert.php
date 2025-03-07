<?php
    session_start();
    include "conn.php";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dados = $db->query("SELECT email FROM clientes WHERE email = '$email'");
    $count = $dados->fetchColumn();
    if($count > 0){
        $_SESSION["erro"] = "Email ja cadastrado...";
        header("location: client.php");
    } else {
        if(isset($name) and isset($email)){
            $state = $db->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");
            $name = $_POST["name"];
            $email = $_POST["email"];
            $state->execute(array($name, $email));
            header("location: client.php");
        }
    }
?>