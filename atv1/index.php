<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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

        input[type="number"] {
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
        <h1>Calculadora</h1>
        <form action="./" method="post">
            <label for="firstValue">Primeiro Valor:</label>
            <input type="number" id="firstValue" name="firstValue" placeholder="Insira o primeiro número" step="0.01" required autofocus>
            <br>
            <label for="secondValue">Segundo Valor:</label>
            <input type="number" name="secondValue" id="secondValue" placeholder="Insira o segundo número" step="0.01" required>
            <br>
            <label for="operation">Operação:</label>
            <select name="operation" id="operation">
                <option value="">Selecionar</option>
                <option class="teste" value="+">+ | Adição</option>
                <option value="-">- | Subtração</option>
                <option value="/">/ | Divisão</option>
                <option value="*">* | Multiplicação</option>
            </select>
            <br>
            <p>Resultado: </p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstValue = $_POST["firstValue"];
                $secondValue = $_POST["secondValue"];
                $op = $_POST["operation"];

                if (strlen($firstValue) > 3 || strlen($secondValue) > 3) {
                    echo "Erro: Os campos de input contém números maiores que 4 dígitos. Infelizmente não aceitamos esses valores por serem grandes demais. Tente novamente com um número menor...";
                } else if (empty($op)) {
                    echo "Erro: Você selecionou uma opção inválida(padrão). Por favor, selecione uma opção válida para continuar com a operação...";
                } else {
                    function soma($val1, $val2)
                    {
                        return $val1 + $val2;
                    }

                    function subtracao($val1, $val2)
                    {
                        return $val1 - $val2;
                    }

                    function divisao($val1, $val2)
                    {
                        if ($val1 == 0 || $val2 == 0) {
                            echo "Erro: um número não pode ser dividido por zero ( 0 )";
                        } else {
                            return $val1 / $val2;
                        }
                    }

                    function multipicacao($val1, $val2)
                    {
                        return  $val1 * $val2;
                    }

                    switch ($op) {
                        case '+':
                            $res = soma(floor($firstValue), floor($secondValue));
                            echo intval($res);
                            break;
                        case '-':
                            $res = subtracao(floor($firstValue), floor($secondValue));
                            echo intval($res);
                            break;
                        case '/':
                            $res = divisao(floor($firstValue), floor($secondValue));
                            echo intval($res);
                            break;
                        case '*':
                            $res = multipicacao(floor($firstValue), floor($secondValue));
                            echo intval($res);
                            break;
                    }
                }
            }
            ?>
            <br>
            <div class="box-buttons">
                <input type="submit" value="Calcular">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </div>
</body>
</html>