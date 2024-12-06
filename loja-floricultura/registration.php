<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="shortcut icon" href="./images//pen.ico" type="image/x-icon">
    <title>Dashboard do Vendedor</title>
</head>
<body>
    <div class="container-vendedor">
    <a href="dashboard.php" class="reg-dash"><button>Voltar ao Dashboard</button></a>
        <div class="group-vendedor">
            <div class="content">
                <h1>Clientes</h1>
                <form action="insertionClient.php" method="post">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                    <br>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required>
                    <br>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
            <div class="content">
                <h1>Produtos</h1>
                <form action="insertionProduct.php" method="post">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" required>
                    <br>
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao" required>
                    <br>
                    <label for="preco">Preço:</label>
                    <input type="number" name="preco" step="0.01" required>
                    <br>
                    <input type="submit" value="Criar">
                </form>
            </div>
        </div>
        <div class="group-vendedor list-group">
            <div class="content clist">
                <h1>Client list:</h1>
                <?php include "clientSelection.php"?>
            </div>
            <div class="content clist">
                <h1>Product list:</h1>
                <?php include "productSelection.php"?>
            </div>
        </div>
    </div>
</body>
</html>