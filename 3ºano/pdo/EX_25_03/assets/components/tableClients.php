<?php
    $subdomi = pathinfo($_SERVER["REQUEST_URI"]);
    $url = $subdomi['filename'];
?>

<table>
    <tr>
        <?= $url == "sales" ? "<th>Select</th>" : "" ?>
        <th>Name</th>
        <th>Email</th>
        <th>Observation</th>
        <th>Edit</th>
        <?= $url != "sales" ? "<th>Delete</th>" : "" ?>
    </tr>
    <?php 
        include "../EX_11_03/client/selectClients.php";
        foreach($result as $i){
            extract($i);
            echo "<tr>";
            if($url == "sales"){
                echo "<td><button class='select-button' onclick=\"selectClient($id, '$nome')\"><i class='fa fa-solid fa-user-check'></i></button></td>";
            }
            echo "<td>$nome</td>";
            echo "<td>$email</td>";
            echo "<td>$observacao</td>";
            echo "<td> <a href='./client/updateClient.php?id=$id'><i class='fa fa-solid fa-pen-to-square'></i></a></td>";
            if($url != "sales") {
                echo "<td> <a href='./client/deleteClient.php?id=$id'><i class='fa fa-solid fa-trash'></i></a></td>";
            } else { 
                echo ""; 
            }
        }
    ?>
    
</table>