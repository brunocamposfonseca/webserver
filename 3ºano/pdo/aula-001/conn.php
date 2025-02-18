<?php
    $db = new PDO("mysql:host=localhost;dbname=pdo", "root", "");

    // var_dump($db);
    // echo "<br><br>";
    // print_r($db);

    // echo "<br><br>";

    echo "<h1>Exemplo de consulta de 1 linha</h1>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetch(PDO::FETCH_ASSOC);

    echo $todos['email'];
    echo "<br><br>";

    echo "<h1>Exemplo de consulta de muitas linha</h1>";
    $dados = $db->query("SELECT * FROM clientes");
    $todos = $dados->fetchAll(PDO::FETCH_ASSOC);

    foreach ($todos as $linha) {
        echo "<br>Linha: ".$linha['id']."<br>";
        echo "Linha: ".$linha['nome']."<br>";
        echo "Linha: ".$linha['email']."<br>";
    }

    if(isset($_POST["name"]) and isset($_POST["email"])){
        $state = $db->prepare("INSERT INTO clientes (nome, email) VALUES (?, ?)");
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $state->execute(array($nome, $email));
        header("Location: index.php");
    }
?>