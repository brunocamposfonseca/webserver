<?php $url = str_replace("/ds-web/root/3%c2%baano/pdo/EX_07_03", "", $_SERVER["REQUEST_URI"]);?>

<nav>
    <ul>
        <li><a href="index.php" <?php if($url == "/index.php" or $url == "/"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Home" ><i class="fa-solid fa-home"></i>Home</a></li>
        <li><a href="client.php" <?php if($url == "/client.php"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Clients"><i class="fa-solid fa-user"></i>Clients</a></li>
        <li><a href="#" <?php if($url == "/products.php"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Products"><i class="fa-solid fa-shopping-bag"></i>Products</a></li>
        <li><a href="#" <?php if($url == "/sales.php"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Sales"><i class="fa-solid fa-usd"></i>Sales</a></li>
    </ul>
</nav>
