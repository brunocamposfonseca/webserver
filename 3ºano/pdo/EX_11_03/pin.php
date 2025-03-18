<?php
   session_start();

     if(!isset($_SESSION['nome']) and !isset($_SESSION['email']) and !isset($_SESSION['senha']) or $_SESSION["cargo"] != "admin"){
       header('location: index.php');
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
    <title>Pin - Restrited</title>
</head>
<body>
    <?php 
        // include "./client/validateClient.php";
    ?>
    <ul class="ul-wrapper">
        <li class="wrapper alert-wrapper" id="alert-wrapper"></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erro']) ? 'open' : '';?>" id="alert-wrapper-erro"><?= $_SESSION["erro"]; unset($_SESSION["erro"]);?></li>
    </ul>
    <form action="pin.php" method="post" name="form"> <!--onsubmit="return validarDadosCliente()" -->
        <h1>Enter Admin</h1>
        <div class="input-fields">
            <input type="text" name="pin" id="pin" placeholder="" autofocus>
            <label for="pin">Pin Code</label>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
<script src="./assets/js/script.js"></script>
</html>

<?php 
    if(isset($_POST["pin"])){
        $pin = $_POST["pin"];
        if($pin == "0123456789"){
            $_SESSION["pin"] = true;
            header("Location: signup.php");
        } else {
            $_SESSION["erro"] = "Pin Incorreto...";
        }
    }
?>