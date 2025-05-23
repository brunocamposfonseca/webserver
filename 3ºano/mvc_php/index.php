<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mvc_php/assets/css/style.css">
    <title>MVCPlace</title>
</head>
<body>
    
    <?php 
        $url = $_GET['url'] ?? '/';
        $caminho = explode("/", $url);
    ?>
   
    <?php include "./assets/components/menu.php"?>
    <div class="container">
        <?php
            require 'rotas.php';
        ?>
    </div>
</body>
</html>