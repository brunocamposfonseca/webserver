<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
            $nome = $_POST["name"];
            $email = $_POST["email"];
            $senha = $_POST["pass"];

            $nomeServidor = "localhost";
            $nomeBancoDados = "cadastro";
            $nomeUsuario = "root";
            $senhaServidor = "usbw";

            $conexao = new mysqli($nomeServidor, $nomeUsuario, $senhaServidor, $nomeBancoDados);

            if ($conexao->connect_error) {
                die("Falha na conexão: " . $conexao->connect_error);
            }

            $nome = $conexao->real_escape_string($nome);
            $email = $conexao->real_escape_string($email);
            $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuario (email, nome, senha) VALUES ('$email', '$nome', '$senhaHash')";

            if ($conexao->query($sql) === TRUE) {
                echo "<h1>Cadastrado com sucesso!</h1>";
            } else {
                echo "<h1>error</h1>";
            }
        ?>
    </div>
</body>

</html>