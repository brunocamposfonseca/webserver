<?php
    setcookie("usuario", "Bruno", time() + 7 * 24 * (60*60) , "/sessions/");
    setcookie("usuarioAntigo", "Bruno", time() + 7 * 24 * (60*60) , "/sessions/");
    

    //Destruindo cookie
    setcookie("usuarioAntigo", "Bruno", -3600, '/sessions/');
    print_r($_COOKIE);
?>