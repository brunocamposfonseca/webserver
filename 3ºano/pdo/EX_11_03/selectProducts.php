<?php
        include "conn.php";
        $dados = $db->query("SELECT * FROM produtos");
        $dados->execute();
        $qnt = $dados->rowCount();
        $result = $dados->fetchAll(PDO::FETCH_ASSOC);
?>