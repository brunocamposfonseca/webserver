<?php
    switch ($caminho[0]) {
        case "":
            require 'controllers/home.php';
            break;

        case "home":
            require 'controllers/home.php';
            break;

        case "produto":
            // var_dump($caminho);
            require 'controllers/produto.php';
            break;

        case "cliente":
            require 'controllers/cliente.php';
            break;

        case "usuario":
            require 'controllers/usuario.php';
            break;

        default:
            echo "<h1>404</h1>";
            echo "<p>Página não encontrada... Talvez a página que você esteja procurando não exista ou foi renomeada.</p>";
            break;
    }

    // if ($url === '/' || $url === "home") {
    //     require 'controllers/home.php';

    // } elseif ($url == 'produto' || $url == 'produto/') {
    //     require 'controllers/produto.php';
        
    // } elseif (preg_match('/^produto\/([0-9]+)$/', $url, $matches)) {
    //     $_GET['id'] = $matches[1];
    //     require 'controllers/produto.php';

    // } elseif ($url == 'cliente' || $url == 'cliente/') {

    // } elseif (preg_match('/^cliente\/([a-zA-Z]+)$/', $url, $matches)) {
    //     $_GET['id'] = $matches[1];
    //     require 'controllers/cliente.php';

    // } else{
    //     echo "<h1>404</h1>";
    //         echo "<p>Página não encontrada... Talvez a página que você esteja procurando não exista ou foi renomeada.</p>";
    // }
?>