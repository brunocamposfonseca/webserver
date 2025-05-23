<div>
    <ul>
        <li><a class="<?= $caminho[0] === "home" || $caminho[0] === ""? "active" : ""?>" href="/mvc_php/home">Home</a></li>
        <li><a class="<?= $caminho[0] === "produto" ? "active" : ""?>" href="/mvc_php/produto">Produtos</a></li>
        <li><a class="<?= $caminho[0] === "cliente" ? "active" : ""?>" href="/mvc_php/cliente">Clientes</a></li>
        <li style="float: right;"><a class="<?= $caminho[0] === "usuario" ? "active" : ""?>" href="/mvc_php/usuario">Usuario</a></li>
    </ul>
</div>