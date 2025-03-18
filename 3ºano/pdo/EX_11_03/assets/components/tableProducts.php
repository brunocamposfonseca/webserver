<table>
    <tr>
        <th>Name</th>
        <th>Code</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php 
        include "../EX_11_03/product/selectProducts.php";

        foreach($result as $i){
            $precoArray = $i["preco"];
            $preco = floatval($precoArray);

            echo "<tr>";
            echo "<td>".$i["nome"]."</td>";
            echo "<td>".$i["code"]."</td>";
            echo "<td>".$i["estoque"]."</td>";
            echo "<td>$". number_format($preco, 2, '.', ',')."</td>";
            echo "<td> <a href='./product/updateProduct.php?id=".$i["id"]."'><i class='fa fa-solid fa-pen-to-square'></i></a></td>";
            echo "<td> <a href='./product/deleteProduct.php?id=".$i["id"]."'><i class='fa fa-solid fa-trash'></i></a></td>";
            echo "</tr>";
        }
    ?>
    
</table>