<?php
    include_once 'conn.php';

    $id = $_GET['id'];
    $stmt = $db->prepare("DELETE FROM clientes WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "Deletou " . $stmt->rowCount()."linhas";
        header("location: index.php");
    } else {
        echo "Não deletou nenhuma linha...";
        header("location: index.php");
    }
?>