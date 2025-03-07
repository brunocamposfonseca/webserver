<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a42e32da7f.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>
    <?php include_once "./components/navbar.php"?>
    <form action="insert.php" method="post" name="form" onsubmit="return validarDadosCliente()">
        <h1>Register</h1>
        <div class="input-fields">
            <input type="name" name="name" id="name" placeholder="">
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <input type="email" name="email" id="email" placeholder=""></input>
            <label for="email">Email</label>
        </div>
        <div class="input-fields">
            <textarea name="obs" id="obs" rows="4" placeholder=""></textarea>
            <label for="obs">Observação</label>
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
        <h1>Registros de clientes</h1>
        <?php include "./components/tableClients.php"?>
    </div>
</body>
<script src="js/script.js"></script>
</html>