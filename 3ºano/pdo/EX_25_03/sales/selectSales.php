<?php
    include "./conn.php";
    $data = $db->query("SELECT * FROM vendas");
    $data->execute();
    $qnt = $data->rowCount();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
   
?>