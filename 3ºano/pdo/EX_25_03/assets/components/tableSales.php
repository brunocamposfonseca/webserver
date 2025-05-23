<div class="card-sales-container">
<?php
    include "./sales/selectSales.php";
    foreach ($result as $i): extract($i);
?>
        <div class="card-sales">
            <div class="info-card-sales">
                <span class="sales-id"><?= $id?></span>
                <ul>
                    <li><span>Client: </span><?php
                        $stmt = $db->prepare("SELECT nome FROM clientes WHERE id = :idCliente");
                        $stmt->bindParam(':idCliente', $idCliente);
                        $stmt->execute();
                        $row = $stmt->rowCount();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        if($row >0) {
                            $name = $data["nome"];
                            echo $name;
                        }
                    ?></li>
                    <li><span>Date time: </span><?php
                        $time = new DateTime($dataVenda);
                        echo $time->format('m/d/Y - H:i A');
                    
                    ?></li>
                </ul>
            </div>
            
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                        <?php 
                            $sale = $db->prepare("SELECT idProduto, preco, quantidade FROM produtosvendidos WHERE idVenda = :id");
                            $sale->bindParam(":id", $id);
                            $sale->execute();
                            $prod = $sale->fetchAll(PDO::FETCH_ASSOC);
                            foreach($prod as $p): extract($p)
                        ?>
                            <tr>
                                <td><?= $idProduto?></td>
                                <?php 
                                    $nprod = $db->prepare("SELECT nome, code FROM produtos WHERE id = :id");
                                    $nprod->bindParam(":id", $idProduto);
                                    $nprod->execute();
                                    $dataProd = $nprod->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <td><?= $dataProd["code"]?></td>
                                <td><?= $dataProd["nome"]?></td>
                                <td><?= number_format($precos, 2, '.', ',')?></td>
                                <td><?= $quantidade?></td>
                            </tr>
                        <?php endforeach; ?>
                    
                </table>
        </div>

<?php endforeach; ?>
</div>