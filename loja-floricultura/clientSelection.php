<div class="list">
    <table>
        <colgroup>
            <col class="id">
            <col class="name">
            <col class="email">
        </colgroup>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
            include_once("connection.php");
            $sql = "SELECT * FROM cliente";
            $resultado = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    echo "<tr><td>".$linha['id']."</td><td>".$linha['nome']."</td><td>".$linha['email']."</td>"."</tr>";
                }
            } else {
                echo "Nenhum registro encontrado.";
            }
        ?>
    </table>
</div>