<?php
    $subdomi = pathinfo($_SERVER["REQUEST_URI"]);
    $url = $subdomi['filename'];
?>


<nav>
    <div>
        <img src="<?php if($url == "updateClient" or $url == "updateProduct"){echo '../assets/img/favicon.png';}else{echo './assets/img/favicon.png';};?>" width="25px" height="30px"/>
    </div>
    <ul>
        <li><a href="<?php if($url == "updateClient" or $url == "updateProduct"){echo '../index.php';}else{echo './index.php';};?>" <?php if($url == "index" or $url == "EX_25_03"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Home" ><i class="fa-solid fa-home"></i>Home</a></li>
        <li><a href="<?php if($url == "updateClient" or $url == "updateProduct"){echo '../client.php';}else{echo './client.php';};?>" <?php if($url == "client" or $url == "updateClient"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Clients"><i class="fa-solid fa-user"></i>Clients</a></li>
        <li><a href="<?php if($url == "updateClient" or $url == "updateProduct"){echo '../product.php';}else{echo './product.php';};?>" <?php if($url == "product" or $url == "updateProduct"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Products"><i class="fa-solid fa-shopping-bag"></i>Products</a></li>
        <li><a href="<?php if($url == "updateClient" or $url == "updateProduct"){echo '../sales.php';}else{echo './sales.php';};?>" <?php if($url == "sales"){echo "class='active-url meumenu'";}else{echo "class='meumenu'";}?> title="Sales"><i class="fa-solid fa-usd"></i>Sales</a></li>
    </ul>
    <div class="dropdown-user">
        <div class="drop-img">
            <i class="fa fa-user"></i>
        </div>
        <div class="drop-user-content">
            <div class="drop-user">
                <div class="drop-user-img">
                    <i class="fa fa-user"></i>
                </div>
                <div class="drop-user-info">
                    <h2 class="drop-user-name"><?= $_SESSION["nome"]?></h2>
                    <p><?=$_SESSION["cargo"]?></p>
                </div>
            </div>
            <a href="<?php if($url == "updateClient" or $url == "updateProduct"){echo '../logout.php';}else{echo './logout.php';};?>"><button class="drop-logout">Logout</button></a>
        </div>
    </div>
</nav>
