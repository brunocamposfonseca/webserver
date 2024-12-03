<?php
    include_once('connection.php');
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = "INSERT INTO cliente (nome, email) VALUES ('$name', '$email')";

    if (mysqli_query($conexao, $sql)) {
    echo "New client inserted successfully!<br>";
    header('location: index.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>