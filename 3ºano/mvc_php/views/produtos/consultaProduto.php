<h1>Produtos cadastrados</h1>

<table class="produtos">
        <th>Nome:</th>
        <th>Preço:</th>
        <th>Estoque:</th>
        <th>Foto:</th>
    <?php
        foreach($dados as $dado){
            extract($dado);
            echo "<tr>";
                echo "<td>$nomeProduto</td>";
                echo "<td>$precoProduto</td>";
                echo "<td>$estoqueProduto</td>";
                echo "<td><img id='previewImagem' src='/mvc_php/fotos/$fotoProduto'/></td>";
            echo "</tr>";
        }
    ?>
</table>