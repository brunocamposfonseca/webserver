<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php" class="meumenu" title="Home">Home</a></li>
            <li><a href="#" class="meumenu" title="Clients">Clients</a></li>
            <li><a href="#" class="meumenu" title="Products">Products</a></li>
            <li><a href="#" class="meumenu" title="Sales">Sales</a></li>
        </ul>
    </nav>
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
</body>
<script src="js/script.js"></script>
</html>