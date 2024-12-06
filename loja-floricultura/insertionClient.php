<?php
    include_once('connection.php');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$name', '$email', '$senha')";

    if (mysqli_query($conexao, $sql)) {
    echo "New client inserted successfully!<br>";
    header('location: registration.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>