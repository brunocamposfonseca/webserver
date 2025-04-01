<table>
    <tr>
        <th>ID</th>
        <th>Date/hours</th>
        <th>Name - Client</th>
        <th>Name - Product</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
    <?php
    include "./sales/selectSales.php";

    foreach ($result as $i) {
        extract($i);
        echo "<tr>";
        echo "<td>$id</td>";

        $time = str_replace('-', '/', $dataVenda);
        $time = substr($time,5,(7 - 5 + 1)) . substr($time,8,(9-8+1)) . $time[4] . substr($time, 0, (3-0+1));

        echo "<td>$time</td>";

        $dataVc = $db->prepare("SELECT nome FROM clientes WHERE id = :id");
        $dataVc->bindParam(':id', $idCliente);
        $dataVc->execute();
        $nameClient = $dataVc->fetch(PDO::FETCH_ASSOC);
        echo "<td>" . $nameClient["nome"] . "</td>";

        $dataPv = $db->prepare("SELECT idProduto, preco, quantidade FROM produtosvendidos WHERE idVenda = :idSale");
        $dataPv->bindParam(':idSale', $id);
        $dataPv->execute();
        $res = $dataPv->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($res)) {
            echo "<td><ul>";
            foreach ($res as $prod) {
                $prodQuery = $db->prepare("SELECT nome FROM produtos WHERE id = :idProd");
                $prodQuery->bindParam(':idProd', $prod["idProduto"]);
                $prodQuery->execute();
                $nameProd = $prodQuery->fetch(PDO::FETCH_ASSOC);
                echo "<li>" . $nameProd["nome"] . "</li></br>";
            }
            echo "</ul></td>";

            echo "<td><ul>";
            foreach ($res as $prod) {
                echo "<div>" . number_format($prod["preco"], 2, '.', ',') . "</div><br>";
            }
            echo "</ul></td>";

            echo "<td><ul>";
            foreach ($res as $prod) {
                echo "<li>" . $prod["quantidade"] . "</li>";
            }
            echo "</ul></td>";
        }

        echo "</tr>";
    }
    ?>
</table>