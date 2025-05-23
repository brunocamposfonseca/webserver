<?php
    include "./conn.php";
    // v E c São apelidos dados às tabelas
    $data = $db->query("SELECT *, c.nome AS nomeC, p.nome AS nomeP FROM vendas v INNER JOIN clientes c ON c.id = v.idCliente INNER JOIN produtosvendidos pv ON pv.idVenda = v.id INNER JOIN produtos p ON p.id = pv.idProduto ORDER BY v.id");
    $data->execute();
    $qnt = $data->rowCount();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result);
?>