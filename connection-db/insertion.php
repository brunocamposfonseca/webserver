<?php
    include_once('connection.php');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO funcionario (nome, email, senha) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conexao, $sql)) {
    echo "Novo registro inserido com sucesso!<br>";
    header('location: index.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>