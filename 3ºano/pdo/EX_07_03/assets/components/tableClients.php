<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Observation</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php 
        include "./selectClients.php";
        foreach($result as $i){
            echo "<tr>";
            echo "<td>",$i["id"],"</td>";
            echo "<td>",$i["nome"],"</td>";
            echo "<td>",$i["email"],"</td>";
            echo "<td>",$i["observacao"],"</td>";
            echo "<td> <a href='./clientUpdate.php?id=",$i["id"],"'><i class='fa fa-solid fa-pen-to-square'></i></a></td>";
            echo "<td> <a href='./delete.php?id=",$i["id"],"'><i class='fa fa-solid fa-trash'></i></a></td>";
            echo "</tr>";
        }
    ?>
    
</table>