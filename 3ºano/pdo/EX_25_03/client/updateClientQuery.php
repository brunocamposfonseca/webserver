<?php
    session_start();

    include "../conn.php";
    $id = $_GET["id"];
    $newName = $_POST["name"];
    $newEmail = $_POST["email"];
    $newObs = $_POST["obs"];


    $dados = $db->prepare("UPDATE clientes SET nome = :nome, email = :email, observacao = :obs WHERE id = :id");
    $dados->bindParam(":id", $id);
    $dados->bindParam(":nome", $newName);
    $dados->bindParam(":email", $newEmail);
    $dados->bindParam(":obs", $newObs);
    $dados->execute();

    if($_SESSION['qualquerUm'] == 4){
        return header("Location: ../createSales.php");
    }else{
        return header("Location: ../client.php");
    }
?>