<?php
        include "conn.php";
        $dados = $db->query("SELECT * FROM clientes");
        $dados->execute();
        $qnt = $dados->rowCount();
        $result = $dados->fetchAll(PDO::FETCH_ASSOC);
?>