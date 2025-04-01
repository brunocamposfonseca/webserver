<?php
session_start();

if (!isset($_SESSION['nome']) and !isset($_SESSION['email']) and !isset($_SESSION['senha'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/log.css">
    <link rel="stylesheet" href="./assets/css/components.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a42e32da7f.js" crossorigin="anonymous"></script>
    <title>Client - Dashboard</title>
</head>
<body>
    <?php
        include_once "./assets/components/navbar.php";
    ?>
    <ul class="ul-wrapper">
        <li class="wrapper notice-wrapper" id="notice-wrapper"></li>
        <li class="wrapper alert-wrapper" id="alert-wrapper"></li>
    </ul>
    <div>
        <h1>Shopping Cart</h1>
    </div>
    <div class="cart" id="cart"></div>
    <div style="display: flex; gap: 15px;">
        <div class="table-clientes" style="padding-block: 30px; display: flex; flex-direction: column; align-items: center; gap: 30px;">
            <h2>Select a client</h2>
            <?php include "./assets/components/tableClients.php" ?>
        </div>

        <div class="table-products" style="padding-block: 30px; display: flex; flex-direction: column; align-items: center; gap: 30px;">
            <h2>Select a products</h2>
            <?php include "./assets/components/tableProducts.php" ?>
        </div>
    </div>

</body>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/sales.js"></script>
</html>