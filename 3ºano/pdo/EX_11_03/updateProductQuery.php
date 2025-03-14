<?php
    include "conn.php";
    $id = $_GET["id"];
    $newName = $_POST["name"];
    $newCode = $_POST["code"];
    $newStock = $_POST["stock"];
    $newPrice = $_POST["price"];

    $dados = $db->prepare("UPDATE produtos SET code = :code, nome = :nome , estoque = :estoque, preco = :preco WHERE id = :id");
    $dados->bindParam(":id", $id);
    $dados->bindParam(":nome", $newName);
    $dados->bindParam(":code", $newCode);
    $dados->bindParam(":estoque", $newStock);
    $dados->bindParam(":preco", $newPrice);

    $dados->execute();
    header("Location: product.php");
?>
