<div class="list">
    <?php
        include_once("connection.php");
        $sql = "SELECT * FROM produto";
        $resultado = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_assoc($resultado)) {
                echo "<div><h3>" . $linha['nome'] . "</h3><ul><li>Id: " . $linha['id'] . "</li><li>" . "Price: $" . number_format($linha['valor'], 2, ".", ',') . "</li><li>" . "Stock: " . $linha['estoque'] . "</li></ul></div>";
            }
        } else {
            echo "Nenhum registro encontrado.";
        }
    ?>
</div>