<?php
    include_once('connection.php');
    $nome = $_POST["name"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];

    $sql = "INSERT INTO produto (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";

    if (mysqli_query($conexao, $sql)) {
    echo "New product inserted successfully!<br>";
    header('location: registration.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>