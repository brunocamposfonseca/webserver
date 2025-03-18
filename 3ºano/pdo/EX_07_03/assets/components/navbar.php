<?php
    $subdomi = pathinfo($_SERVER["REQUEST_URI"]);
    $url = $subdomi['filename'];
?>


<nav>
    <ul>
        <li><a href="index.php" <?php if($url == "index" or $url == "EX_11_03"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Home" ><i class="fa-solid fa-home"></i>Home</a></li>
        <li><a href="client.php" <?php if($url == "client" or $url == "updateClient"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Clients"><i class="fa-solid fa-user"></i>Clients</a></li>
        <li><a href="product.php" <?php if($url == "product" or $url == "updateProduct"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Products"><i class="fa-solid fa-shopping-bag"></i>Products</a></li>
        <li><a href="vendas.php" <?php if($url == "sales"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Sales"><i class="fa-solid fa-usd"></i>Sales</a></li>
    </ul>
</nav>
