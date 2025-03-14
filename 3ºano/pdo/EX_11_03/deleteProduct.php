<?php
    include_once 'conn.php';

    $id = $_GET['id'];
    $stmt = $db->prepare("DELETE FROM produtos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "Deletou " . $stmt->rowCount()."linhas";
        header("location: product.php");
    } else {
        echo "Não deletou nenhuma linha...";
        header("location: product.php");
    }
?>