<div class="card-sales-container">
    <?php
    include "./sales/selectSales.php";

    $lastSaleId = null;
    foreach ($result as $i):
        extract($i);

        if ($lastSaleId !== $idVenda):
            if ($lastSaleId !== null):
                echo "</table></div>";
            endif;
            $lastSaleId = $idVenda;
    ?>
            <div class="card-sales">
                <div class="info-card-sales">
                    <span class="sales-id"><?= $idVenda ?></span>
                    <ul>
                        <li><span>Client: </span><?= $nomeC ?></li>
                        <li><span>Date time: </span>
                            <?php
                            $time = new DateTime($dataVenda);
                            echo $time->format('m/d/Y - H:i A');
                            ?>
                        </li>
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
                <?php endif; ?>
                <tr>
                    <td><?= $idProduto ?></td>
                    <td><?= $code ?></td>
                    <td><?= $nomeP ?></td>
                    <td>$<?= number_format($preco, 2, '.', ',') ?></td>
                    <td><?= $quantidade ?></td>
                </tr>
            <?php endforeach; ?>

            <?php if ($lastSaleId !== null): ?>
                </table>
            </div>
        <?php endif; ?>
</div>