<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body, html{
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container{
            box-shadow: 2px 5px 5px #00000017;
            padding: 30px;
            border-radius: 10px;
            background-color: #f8f8f8;
        }

        h1{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $nomeServidor = "localhost";
            $nomeBancoDados = "cadastro";
            $nomeUsuario = "root";
            $senhaServidor = "usbw";

            $conexao = new mysqli($nomeServidor, $nomeUsuario, $senhaServidor, $nomeBancoDados);

            if ($conexao->connect_error) {
                die("Falha na conexão: " . $conexao->connect_error);
            }

            $email = $_POST['email'] ?? '';
            $senha = $_POST['pass'] ?? '';

            $email = $conexao->real_escape_string($email);

            $sql = "SELECT * FROM usuario WHERE email = '$email'";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $hash = $row['senha'];
                $nome = $row['nome'];

                if (password_verify($senha, $hash)) {
                    echo "<h1>Autorizado! Seja bem vindo, " . $nome . "</h1>";
                } else {
                    echo "<h1>Senha incorreta...</h1>";
                }
            } else {
                echo "<h1>Usuário inexistente...</h1>";
            }

            $conexao->close();
        ?>
    </div>
</body>
</html>