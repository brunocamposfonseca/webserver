<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <form action="conn.php" method="post">
        <h1>Register</h1>
        <div class="input-fields">
            <input type="name" name="name" id="name" placeholder="" required>
            <label for="name">Name</label>
        </div>
        <div class="input-fields">
            <input type="email" name="email" id="email" placeholder="" required></input>
            <label for="email">email</label>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>