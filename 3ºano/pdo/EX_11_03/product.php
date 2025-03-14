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
    <title>Product - Dashboard</title>
</head>
<body>
    <?php 
        include_once "./assets/components/navbar.php"
    ?>
    <p class="wrapper alert-wrapper" id="alert-wrapper"></p>
    <p class="wrapper observation-wrapper" id="observation-wrapper"></p>
    <form action="insertProducts.php" method="post" name="form" onsubmit="return validarDadosProduto(event), barCodeVal()">
        <h1>Register Product</h1>
        <div class="input-fields">
            <input type="text" name="name" id="name" placeholder="" autofocus>
            <label for="name">Product name</label>
        </div>
        <div class="input-fields">
            <input type="number" name="code" id="code" placeholder=""></input>
            <label for="code">Product code</label>
        </div>
        <div class="input-fields">
            <input type="number" name="stock" id="stock" placeholder="">
            <label for="stock">Stock</label>
        </div>
        <div class="input-fields">
            <input type="text" step="0.01" name="price" id="price" placeholder="">
            <label for="price">Price</label>
        </div>
        <?php 
            session_start();
            if(isset($_SESSION['erro'])){
                $erro = $_SESSION['erro'];
                echo "<p style='color:red;'>$erro</p>";
            }
            unset($_SESSION['erro']);
        ?>
        <button type="submit">Submit</button>
    </form>
    <div class="table-clientes" style="padding-block: 30px; display: flex; flex-direction: column; align-items: center; gap: 30px;">
        <h1>Customer Registration</h1>
        <?php include "assets/components/tableProducts.php"?>
    </div>
</body>
<script src="./assets/js/script.js"></script>
</html>