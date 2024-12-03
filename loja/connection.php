<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = 'usbw';
    $banco = 'loja';

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);
    if (!$conexao) {
        die('Erro na conexão: ' . mysqli_connect_error());
    }
?>