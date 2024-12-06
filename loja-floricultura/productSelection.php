<div class="list">
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th style="width: 80px;">Preço</th>
        </tr>
        <?php
            include_once("connection.php");
            $sql = "SELECT * FROM produto";
            $resultado = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<tr><td>".$linha['id']."</td><td>".$linha['nome']."</td><td>".$linha['descricao']."</td><td>R$ ".$linha['preco']."</td></tr>";
                }
            } else {
                echo "Nenhum registro encontrado.";
            }
        ?>
    </table>
</div>