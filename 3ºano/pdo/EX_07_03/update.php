<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="css/components.css">
    <title>Edit Client</title>
</head>
<body>
    <?php include_once "./components/navbar.php"?>
    <form action="update.php" method="post">
        <h1>Edit</h1>
        <div class="input-fields">
            <input type="name" name="name" id="name" placeholder="" required>
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <input type="email" name="email" id="email" placeholder="" required></input>
            <label for="email">email</label>
        </div>
        <div class="input-fields">
            <textarea name="obs" id="obs" rows="4" placeholder=""></textarea>
            <label for="obs">Observação</label>
        </div>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>