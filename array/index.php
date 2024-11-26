<?php
    include_once('arrays.php');
    
    // $variavelNome = "Bruno";

    // if(is_array($estados)){
    //     echo "É um array! <br>";
    // } else {
    //     echo "Não é um array... <br>";
    // }

    // if(is_array($estadoChaves)){
    //     echo "É um array! <br>";
    // } else {
    //     echo "Não é um array... <br>";
    // }

    // if(is_array($variavelNome)){
    //     echo "É um array! <br>";
    // } else {
    //     echo "Não é um array... <br>";
    // }

        // unshift e push

    array_unshift($estados, "Rio Grande do Sul");
    array_push($estados, "Paraná");

    // foreach ($estados as $item) {
    //     echo $item . "<br>";
    // }

        // shift e pop

    $removido = array_shift($estados);
    echo $removido . "<br>";

    $removido = array_pop($estados);
    echo $removido . "<br>";

    // array_push($estados, "Paraná");

    // foreach ($estados as $item) {
    //     echo $item . "<br>";
    // }

        //in_array
    
    if(in_array("São Paulo", $estados)){
        echo "Estado encontrado!";
    }
?>