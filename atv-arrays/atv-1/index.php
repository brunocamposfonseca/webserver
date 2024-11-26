<?php
    //Exercicio 01

    echo "<h1>1. </h1>";
    $frutas = array("Melão", "Laranja", "Melancia", "Banana", "Uva");

    foreach($frutas as $fruta){
        echo $fruta . "<br>";
    }

    //Exercicio 02

    echo "<h1>2. </h1>";

    array_push($frutas, "Abacaxi");

    foreach($frutas as $fruta){
        echo $fruta . "<br>";
    }

    //Exercicio 03

    echo "<h1>3. </h1>";

    sort($frutas);

    foreach($frutas as $fruta){
        echo $fruta . "<br>";
    }

    //Exercicio 04

    echo "<h1>4. </h1>";

    $produto["nome"] = "Teclado";
    $produto["preco"] = 120;
    $produto["estoque"] = 15;

    foreach($produto as $item){
        echo $item . "<br>";
    }

    //Exercicio 05

    echo "<h1>5. </h1>";

    $produto["preco"] = 140;

    foreach($produto as $item){
        echo $item . "<br>";
    }

    //Exercicio 06

    echo "<h1>6. </h1>";

    $venda = $produto["preco"] * $produto["estoque"];
    echo "Valor total: " . $venda;

    //Exercicio 07

    echo "<h1>7. </h1>";

    $produtosNome = array("Gabinete", "Mouse", "Monitor");  
    $produtosValor = array(190, 89.99, 899);

    $produtos = array_combine($produtosNome, $produtosValor);

    print_r($produtos);

    //Exercicio 08

    echo "<h1>8. </h1>";

    $cores = array("vermelho", "azul", "amarelo", "verde", "preto", "branco");

    if(in_array("verde", $cores)){
        echo "Cor verde encontrada!";
    } else {
        echo "Infelizmente não conseguimos encontrar a cor verde na lista...";
    }

    //Exercicio 09

    echo "<h1>9. </h1>";

    $notas = array(10, 7, 8, 9, 4, 9, 6);


    $media = array_sum($notas);
    
    echo $media;

?>