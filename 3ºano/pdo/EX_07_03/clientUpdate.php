<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/log.css">
    <link rel="stylesheet" href="./assets/css/components.css">
    <title>Edit Client</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD'] != 'GET' || !isset($_GET["id"])){
            header("Location: client.php");
        } 
        
        include "conn.php";

        $id = $_GET["id"];
        $stmt = $db->prepare("SELECT * FROM clientes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $name = $data['nome'];
        $email = $data['email'];
        $obs = $data['observacao'];

        include_once "./assets/components/navbar.php"
    ?>
    <p class="wrapper alert-wrapper" id="alert-wrapper"></p>
    <p class="wrapper observation-wrapper" id="observation-wrapper"></p>
    <form action="<?="clientUpdateQuery.php?id=$id"?>" method="post" name="form">
        <h1>Edit</h1>
        <div class="input-fields">
            <input type="name" name="name" id="name" placeholder="" value="<?=$name?>" autofocus>
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <input type="email" name="email" id="email" placeholder="" value="<?=$email?>"></input>
            <label for="email">Email</label>
        </div>
        <div class="input-fields">
            <textarea name="obs" id="obs" rows="4" placeholder=""><?=$obs?></textarea>
            <label for="obs">Observation</label>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
<script src="./assets/js/script.js"></script>
</html>