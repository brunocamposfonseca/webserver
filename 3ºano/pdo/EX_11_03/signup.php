<?php
    session_start();
    if(!isset($_SESSION['nome']) and !isset($_SESSION['email']) and !isset($_SESSION['senha'])){
    header('location: login.php');
    }

    if(!isset($_SESSION["pin"])){
        header("Location: pin.php");
    }
    unset($_SESSION["pin"]);
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
    <title>Login - Sugnup</title>
</head>
<body>
<form action="./insertSignup.php" method="post" name="form">
        <h1>Login Admin</h1>
        <div class="input-fields">
            <input type="text" name="name" id="name" placeholder="" autofocus>
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <select title="job" name="job" id="job">
                <option selected disabled>Job Position</option>
                <option value="admin">Administrator</option>
                <option value="manager">Manager</option>
                <option value="user">User</option>
            </select>
        </div>
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