<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/components.css">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a42e32da7f.js" crossorigin="anonymous"></script>
    <title>Index - Dashboard</title>
</head>
<body>
    <?php include_once "./assets/components/navbar.php"?>
    <p class="wrapper alert-wrapper" id="alert-wrapper"></p>
    <p class="wrapper observation-wrapper" id="observation-wrapper"></p>

    <section class="dashboard">
        <div class="dash-info">
            <h1>Dashboard</h1>
            <p class="obs"><i class="fa-solid fa-lightbulb fa-bounce"></i>The dashboard is under development, the data processed so far are:</p>
        </div>
        <div class="card-container">
            <div class="card-dashboard">
                <p>Number of registered customers:</p>
                <?php
                    include "conn.php";
                    $query = $db->query("SELECT * from clientes");
                    $query->execute();
                    $data = $query->rowCount();
                    
                    echo "<span>".$data."</span>";
                ?>
            </div>
            <div class="card-dashboard">
                <p>Number of registered products:</p>
                <?php
                    include "conn.php";
                    $query = $db->query("SELECT * from produtos");
                    $query->execute();
                    $data = $query->rowCount();
                    
                    echo "<span>".$data."</span>";
                ?>
            </div>
        </div>
    </section>
</body>
<script src="./assets/js/script.js"></script>
</html>