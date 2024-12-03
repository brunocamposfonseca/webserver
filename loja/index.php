<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connection DB</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Client</h1>
            <form action="insertionClient.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="content">
            <h1>Product</h1>
            <form action="insertionProduct.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" required>
                <br>
                <label for="price">Price:</label>
                <input type="number" name="price" step="0.01" required>
                <br>
                <label for="stock">Stock:</label>
                <input type="number" name="stock" required>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div class="container list-group">
        <div class="content clist">
            <h1>Client list:</h1>
            <?php include "clientSelection.php"?>
        </div>
        <div class="content clist">
            <h1>Product list:</h1>
            <?php include "productSelection.php"?>
        </div>
    </div>
</body>
</html>