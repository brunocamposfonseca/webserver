<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Computador</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
        }

        body,
        html {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-content {
            background-color: #f8f8f8;
            border-radius: 10px;
            width: 420px;
            padding: 40px;
            margin: auto;
            text-align: center;
            box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: start;
        }

        input[type="number"],
        input[type="text"],
        input[type="file"] {
            display: block;
            margin-block: 10px 20px;
            border: none;
            padding: 15px;
            width: calc(100% - 30px);
            background-color: #f1f1f1;
            border-radius: 8px;
            border: 2px transparent solid;
            transition: all 0.3s;
        }

        select {
            display: block;
            margin-block: 10px 20px;
            border: none;
            padding: 15px;
            width: 100%;
            background-color: #f1f1f1;
            border-radius: 8px;
            border: 2px transparent solid;
            transition: all 0.3s;
        }

        input[type="number"]:focus,
        input[type="text"]:focus,
        input[type="file"]:focus,
        select:focus {
            border: 2px black solid;
            outline: none;
        }

        input[type="submit"],
        input[type="reset"] {
            cursor: pointer;
            width: 100%;
            border: none;
            padding: 15px;
            background-color: black;
            color: white;
            border-radius: 8px;
            transition: all 0.3s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: rgb(43, 43, 43);
        }

        .logo-content {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
        }

        img {
            width: 120px;
            height: auto;
            display: inline;
        }

        h1 {
            font-weight: 600;
            margin-block: 20px;
            margin-bottom: 30px;
        }

        p {
            display: inline;
        }

        .box-buttons {
            margin-top: 30px;
            display: flex;
            gap: 8px;
        }
    </style>
</head>
<body>
<div class="form-content">
        <h1>Registrar Computador</h1>
        <form action="./" method="post">
            <label for="name">Nome do Aluno:</label>
            <input type="text" id="name" name="name" placeholder="Insira o nome do aluno" required autofocus>
            <label for="rm">RM:</label>
            <input type="number" name="rm" id="rm" placeholder="Insira o RM" max="9999" required>
            <label for="num">Número da chamada:</label>
            <input type="number" name="num" id="num" placeholder="Insira o número da chamada" max="36" required>
            <label for="pat">Número do patrimônio:</label>
            <input type="number" name="pat" id="pat" placeholder="Insira o número de Patrimônio" max="9999999" required>
            <label for="numMac">Número do Computador:</label>
            <input type="number" name="numMac" id="numMac" placeholder="Insira o número da máquina" max="36" required>
            <label for="photo">Foto do Computador:</label>
            <input type="file" name="photo" id="photo" required>
            <label for="st">ST(Service Tag):</label>
            <input type="number" name="st" id="st" placeholder="Insira o ST" max="99999999999" required>
            <div class="box-buttons">
                <input type="submit" value="Registrar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </div>
</body>
</html>