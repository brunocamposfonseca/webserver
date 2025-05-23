<h1>Produtos cadastrados</h1>

<table class="produtos">
        <th>Nome:</th>
        <th>Preço:</th>
        <th>Estoque:</th>
        <th>Acessar</th>
        <th>Excluir</th>
    <?php
        foreach($dados as $dado){
            extract($dado);
            echo "<tr>";
                echo "<td>$nomeProduto</td>";
                echo "<td>$precoProduto</td>";
                echo "<td>$estoqueProduto</td>";
                echo "<td><a href='produto/$idProduto'><button class='btn-cadastro'>Acessar Produto</button></a></td>";
                echo "<td><a href='produto/delete/$idProduto'><button class='btn-cadastro'>Excluir</button><a></td>";
            echo "</tr>";
        }
    ?>
</table>
<br>
<div class="botao-cadastro">
<a href="produto/cadastro" ><button class="btn-cadastro">Cadastrar produto</button></a>
</div>
