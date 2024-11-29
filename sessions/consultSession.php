<?php
    session_start();
    // echo "Username: " . $_SESSION['name'] . "<br>";
    // echo "Favorite Color: " . $_SESSION['favcolor'] . "<br>";
    // echo "Favorite Animal: " . $_SESSION['favanimal'] . "<br>";

    if(empty($_SESSION['name'])){
        echo "Usuário inexistente...";
    } else if ($_SESSION['name'] == "Bruno"){
        echo "Logado! Bem vindo Bruno!";
    }

?>