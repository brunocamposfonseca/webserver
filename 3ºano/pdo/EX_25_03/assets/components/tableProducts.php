<table>
    <tr>
        <?= $url == "sales" ? "<th>Select</th>" : "" ?>
        <th>Name</th>
        <th>Code</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Edit</th>
        <?= $url != "sales" ? "<th>Delete</th>" : "" ?>
    </tr>
    <?php 
        include "../EX_11_03/product/selectProducts.php";

        foreach($result as $i){
            extract($i);
            $precoArray = $preco;
            $precos = floatval($precoArray);

            echo "<tr>";
            if($url == "sales"){
                echo "<td><button class='select-button' onclick=\"selectProduct($id, '$code', '$nome', '$precos', '$estoque')\"><i class='fa fa-solid fa-circle-check'></i></button></td>";
            }
            echo "<td>$nome</td>";
            echo "<td>$code</td>";
            echo "<td>$estoque</td>";
            echo "<td>$". number_format($precos, 2, '.', ',')."</td>";
            echo "<td> <a href='./product/updateProduct.php?id=$id'><i class='fa fa-solid fa-pen-to-square'></i></a></td>";
            if($url != "sales") {
                echo "<td> <a href='./product/deleteProduct.php?id=$id'><i class='fa fa-solid fa-trash'></i></a></td>";
            } else {
                echo "";
            }
            echo "</tr>";
        }
    ?>
    
</table>