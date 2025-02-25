<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="msg-container">
    <?php
        include "conn.php";
        echo "<h1>Multiplas consultas</h1>";
        $dados = $db->query("SELECT * FROM clientes");
        $dados->execute();
        $result = $dados->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo "<h3 style='font-weight: bold;'>".$row["nome"]."</h3>";
            echo "<p>Email: ".$row["email"]."</p>";
            echo "<a href='update.php?id=".$row["id"]."'><button class='update'>update</button></a>";
            echo "<br><br>";
            echo "<a href='delete.php?id=".$row["id"]."'><button class='logout'>Excluir</button></a>";
            echo "<br><br>";
        }
    ?>
    </div>
</body>
</html>