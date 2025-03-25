<?php
    session_start();
    include "../conn.php";
    $name = $_POST["name"];
    $price = $_POST["price"];
    $code = $_POST["code"];
    $stock = $_POST["stock"];
    $dados = $db->query("SELECT code FROM produtos WHERE code = '$code'");
    $count = $dados->fetchColumn();
    include "./validateProduct.php";
    if($count > 0){
        $_SESSION["erro"] = "produto ja cadastrado...";
        header("location: ../product.php");
    } else {
        if(isset($name) and isset($price)){
            $state = $db->prepare("INSERT INTO produtos (code, nome, estoque, preco) VALUES (:code, :nome, :estoque, :preco)");
            $name = $_POST["name"];
            $price = $_POST["price"];
            $code = $_POST["code"];
            $stock = $_POST["stock"];
            if(validaProduto($name,$code,$stock,$price)){
                $state->bindParam(':nome', $name);
                $state->bindParam(':preco', $price);
                $state->bindParam(':code', $code);
                $state->bindParam(':estoque', $stock);
                $state->execute();
            }
            header("location: ../product.php");
        }
    }
?>