<?php
        include "conn.php";
        $dados = $db->query("SELECT * FROM clientes");
        $dados->execute();
        $result = $dados->fetchAll(PDO::FETCH_ASSOC);
?>