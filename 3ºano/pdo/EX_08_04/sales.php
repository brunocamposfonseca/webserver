<?php
   session_start();

     if(!isset($_SESSION['nome']) and !isset($_SESSION['email']) and !isset($_SESSION['senha'])){
       header('location: login.php');
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/components.css">
    <link rel="stylesheet" href="./assets/css/dashboard.css">
    <link rel="stylesheet" href="./assets/css/log.css">
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a42e32da7f.js" crossorigin="anonymous"></script>
    <title>Index - Dashboard</title>
</head>
<body>
    <?php include_once "./assets/components/navbar.php"?>
    <p class="wrapper alert-wrapper" id="alert-wrapper"></p>
    <p class="wrapper observation-wrapper" id="observation-wrapper"></p>

    <div class="table-sales">
        <h1>Sales</h1>
        <a href="./createSales.php"><button>Create Sale</button></a>
        <?php include "./assets/components/tableSales.php"?>
    </div>

</body>
<script src="./assets/js/script.js"></script>
</html>