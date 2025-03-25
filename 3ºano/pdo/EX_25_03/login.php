<?php
    session_start();

     if(isset($_SESSION['nome']) and isset($_SESSION['email']) and isset($_SESSION['senha'])){
       header('location: index.php');
     }
    include "validateLogin.php";
    if(isset($_POST['email']) && isset($_POST['password'])){
        validaLogin($_POST['email'], $_POST['password']);
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
    <title>Login - Admin</title>
</head>
<body>
<form action="login.php" method="post" name="form" >
        <h1>Login</h1>
        <ul>
            <li class="wrapper alert-wrapper" id="alert-wrapper"></li>
            <li class="wrapper alert-wrapper <?= isset($_SESSION['erroEmaiL']) ? 'open' : '';?>" id="alert-wrapper-name"><?= $_SESSION["erroEmaiL"]; unset($_SESSION['erroEmaiL']);?></li>
            <li class="wrapper alert-wrapper <?= isset($_SESSION['erroPASS']) ? 'open' : '';?>" id="alert-wrapper-email"><?= $_SESSION["erroPASS"]; unset($_SESSION['erroPASS']);?></li>
        </ul>
        <div class="input-fields">
            <input type="email" name="email" id="email" placeholder="" value="<?=isset($_POST['email'])? $_POST['email'] : ""?>"></input>
            <label for="email">Email</label>
        </div>
        <div class="input-fields">
            <input type="password" name="password" id="password" placeholder="">
            <label for="password">Password</label>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
<script src="./assets/js/loginUp.js"></script>
</html>

<?php
    include "./conn.php";
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $stmt = $db->prepare("SELECT * FROM `admin` WHERE email = '$email' AND senha = '$pass'");
        $stmt->execute();
        $qnt = $stmt->rowCount();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($qnt> 0){
            $name = $result["nome"];
            $email =  $result["email"];
            $pass= $result["senha"];
            $job= $result["cargo"];
            $_SESSION["nome"] = $name;
            $_SESSION["email"] = $email;
            $_SESSION["cargo"] = $job;
            $_SESSION["senha"] = $pass;
            header("Location: index.php");
        }
    }else{
        $_SESSION['erroPASS'] = "Usuário/E-mail ou Senha incorreto(s)!";
    }
?>