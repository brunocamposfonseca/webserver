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
    <link rel="stylesheet" href="./assets/css/log.css">
    <link rel="stylesheet" href="./assets/css/components.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a42e32da7f.js" crossorigin="anonymous"></script>
    <title>Product - Dashboard</title>
</head>
<body>
<?php 
        include_once "./assets/components/navbar.php";
        include "./product/validateProduct.php";
    ?>
    <ul class="ul-wrapper">
        <li class="wrapper alert-wrapper" id="alert-wrapper"></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erroNomeP']) ? 'open' : '';?>" id="alert-wrapper-namep"><?= $_SESSION["erroNomeP"]; unset($_SESSION['erroNomeP']);?></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erroCode']) ? 'open' : '';?>" id="alert-wrapper-code"><?= $_SESSION["erroCode"]; unset($_SESSION['erroCode']);?></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erroStock']) ? 'open' : '';?>" id="alert-wrapper-stock"><?= $_SESSION["erroStock"]; unset($_SESSION['erroStock'])?></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erroPreco']) ? 'open' : '';?>" id="alert-wrapper-price"><?= $_SESSION["erroPreco"]; unset($_SESSION['erroPreco'])?></li>
    </ul>
    <form action="./product/insertProducts.php" method="post" name="form" onsubmit="return validarDadosProduto()">
        <h1>Register Product</h1>
        <div class="input-fields">
            <input type="text" name="name" id="name" placeholder="" autofocus value="<?=isset($_SESSION['valorNomeP'])? $_SESSION['valorNomeP'] : "" ?>">
            <label for="name">Product name</label>
        </div>
        <div class="input-fields">
            <input type="number" name="code" id="code" placeholder="" value="<?=isset($_SESSION['valorCode'])? $_SESSION['valorCode'] : "" ?>">
            <label for="code">Product code</label>
        </div>
        <div class="input-fields">
            <input type="number" name="stock" id="stock" placeholder="" value="<?=isset($_SESSION['valorStock'])? $_SESSION['valorStock'] : "" ?>">
            <label for="stock">Stock</label>
        </div>
        <div class="input-fields">
            <input type="text" step="0.01" name="price" id="price" placeholder="" value="<?=isset($_SESSION['valorPreco'])? $_SESSION['valorPreco'] : "" ?>">
            <label for="price">Price</label>
        </div>
        <button type="submit">Submit</button>
    </form>
    <div class="table-products">
        <h1>Customer Registration</h1>
        <?php include "./assets/components/tableProducts.php"?>
    </div>
</body>
<script src="./assets/js/script.js"></script>
</html>