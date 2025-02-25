<?php
    $novoNome = $_POST["name"];
    $novoEmail = $_POST["email"];
    $id = $_GET["id"];
    
    $dados = $db->query("UPDATE usuarios SET nome = '$novoNome', email = '$novoEmail' WHERE id = $id");
    $todos = $dados->fetch(PDO::FETCH_ASSOC);
    
    

?>