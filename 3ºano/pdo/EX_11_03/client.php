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
    <title>Client - Dashboard</title>
</head>
<body>
    <?php 
        include_once "./assets/components/navbar.php";
    ?>
    <ul class="ul-wrapper">
        <li class="wrapper alert-wrapper" id="alert-wrapper"></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erroNome']) ? 'open' : '';?>" id="alert-wrapper-name"><?= $_SESSION["erroNome"]; unset($_SESSION['erroNome']);?></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erroEmail']) ? 'open' : '';?>" id="alert-wrapper-email"><?= $_SESSION["erroEmail"]; unset($_SESSION['erroEmail']);?></li>
        <li class="wrapper alert-wrapper <?= isset($_SESSION['erroObservacao']) ? 'open' : '';?>" id="alert-wrapper-obs"><?= $_SESSION["erroObservacao"]; unset($_SESSION['erroObservacao'])?></li>
    </ul>
    <form action="./client/insertClient.php" method="post" name="form" > <!--onsubmit="return validarDadosCliente()"-->
        <h1>Register Client</h1>
        <div class="input-fields">
            <input type="text" name="name" id="name" placeholder="" autofocus value="<?=isset($_SESSION['valorNome'])? $_SESSION['valorNome'] : "" ?>">
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <input type="text" name="email" id="email" placeholder="" value="<?=isset($_SESSION['valorEmail'])? $_SESSION['valorEmail'] : "" ?>"></input>
            <label for="email">Email</label>
        </div>
        <div class="input-fields">
            <textarea name="obs" id="obs" rows="4" placeholder=""><?=isset($_SESSION['valorObservacao'])? $_SESSION['valorObservacao'] : "" ?></textarea>
            <label for="obs">Observation</label>
        </div>

        <?php
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