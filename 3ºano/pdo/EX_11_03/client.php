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
    <title>Register - Dashboard</title>
</head>
<body>
    <?php 
        include_once "./assets/components/navbar.php"
    ?>
    <p class="wrapper alert-wrapper" id="alert-wrapper"></p>
    <p class="wrapper observation-wrapper" id="observation-wrapper"></p>
    <form action="insertClient.php" method="post" name="form" onsubmit="return validarDadosCliente()">
        <h1>Register Client</h1>
        <div class="input-fields">
            <input type="text" name="name" id="name" placeholder="" autofocus>
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <input type="email" name="email" id="email" placeholder=""></input>
            <label for="email">Email</label>
        </div>
        <div class="input-fields">
            <textarea name="obs" id="obs" rows="4" placeholder=""></textarea>
            <label for="obs">Observation</label>
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
        <?php include "./assets/components/tableClients.php"?>
    </div>
</body>
<script src="./assets/js/script.js"></script>
</html>