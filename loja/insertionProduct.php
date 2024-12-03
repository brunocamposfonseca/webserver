<?php
    include_once('connection.php');
    $name = $_POST["name"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    $sql = "INSERT INTO produto (nome, valor, estoque) VALUES ('$name', '$price', '$stock')";

    if (mysqli_query($conexao, $sql)) {
    echo "New product inserted successfully!<br>";
    header('location: index.php');
    } else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
    }
?>