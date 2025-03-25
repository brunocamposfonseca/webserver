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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/log.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <script src="https://kit.fontawesome.com/a42e32da7f.js" crossorigin="anonymous"></script>
    <title>Edit Product</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD'] != 'GET' || !isset($_GET["id"])){
            header("Location: ../product.php");
        } 
        
        include "../conn.php";

        $id = $_GET["id"];
        $stmt = $db->prepare("SELECT * FROM produtos WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $name = $data['nome'];
        $code = $data['code'];
        $stock = $data['estoque'];
        $price = $data['preco'];

        include_once "../assets/components/navbar.php"
    ?>
    <p class="wrapper alert-wrapper" id="alert-wrapper"></p>
    <p class="wrapper observation-wrapper" id="observation-wrapper"></p>
    <form action="<?="./updateProductQuery.php?id=$id"?>" method="post" name="form" onsubmit="return validarDadosProduto()">
        <h1>Edit</h1>
        <div class="input-fields">
            <input type="text" name="name" id="name" placeholder="" value="<?=$name?>" autofocus>
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <input type="number" name="code" id="code" placeholder="" value="<?=$code?>"/>
            <label for="code">Product code</label>
        </div>
        <div class="input-fields">
            <input type="number" name="stock" id="stock" placeholder="" autofocus value="<?=$stock?>">
            <label for="stock">Stock</label>
        </div>
        <div class="input-fields">
            <input type="text" step="0.01" name="price" id="price" placeholder="" autofocus value="<?=$price?>">
            <label for="price">Price</label>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
<script src="./assets/js/script.js"></script>
</html>