<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Register</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#" class="meumenu" title="Home">Home</a></li>
            <li><a href="client.php" class="meumenu" title="Clients">Clients</a></li>
            <li><a href="#" class="meumenu" title="Products">Products</a></li>
            <li><a href="#" class="meumenu" title="Sales">Sales</a></li>
        </ul>
    </nav>
    <section class="dashboard">
        <div class="dash-info">
            <h1>Dashboard</h1>
            <p>A dashboard se encontra em desenvolvimeto, os dados processados até o momento são: </p>
        </div>
        <div class="card-dashboard">
            <p>Quantidade de clientes cadastrados: </p>
            <?php
            include "conn.php";
            $query = $db->query("SELECT * from clientes");
            $query->execute();
            $data = $query->rowCount();
            
            echo "<span>".$data."</span>";

        ?>
        </div>
    </section>
</body>
<script src="script.js"></script>
</html>