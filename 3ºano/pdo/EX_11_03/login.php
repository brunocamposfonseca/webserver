<?php
    session_start();

     if(isset($_SESSION['nome']) and isset($_SESSION['email']) and isset($_SESSION['senha'])){
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
    <title>Login - Admin</title>
</head>
<body>
<form action="login.php" method="post" name="form" onsubmit="validarDadosCliente()">
        <h1>Login Admin</h1>
        <div class="input-fields">
            <input type="email" name="email" id="email" placeholder=""></input>
            <label for="email">Email</label>
        </div>
        <div class="input-fields">
            <input type="password" name="password" id="password" placeholder=""></textarea>
            <label for="password">Password</label>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
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
    }
?>