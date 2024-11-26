<?php
    $idade = 16;



    //Incluindo a Cabeça
    include('head.html');
    //Incluindo o Corpo

    if($idade >= 16) {
        include('body.html');
    } else {
        include('body2.html');
    }

    include_once('body.php');
    include_once('body.php');
    include('body.php');
    require('body.php');

    //Incluindo o Rodapé
    include('footer.html');
?>