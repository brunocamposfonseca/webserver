<?php
    include_once("connection.php");
    $sql = "SELECT * FROM funcionario";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<h3>Id: " . $linha['id'] . "</h3><ul><li>Nome: " . $linha['nome'] . "</li><li>" . "Email: " . $linha['email'] . "</li></ul>";
        }
    } else {
        echo "Nenhum registro encontrado.";
    }
?>