<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="msg-container">
    <?php
        session_start();
        if(isset($_SESSION["name"]) and isset($_SESSION["email"])){
            echo "<h1>Hi 👋, " . $_SESSION["name"] . "</h1>";
            echo "<a href='logout.php'><button class='logout'>Logout</button></a>";
        } else {
            header("location: index.php");
        }
    ?>
    </div>
</body>
</html>