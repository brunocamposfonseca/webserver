<?php

    header("Content-Type: application/json");
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $products = $data["product"];
    foreach($products as $i){
        echo $i['name'];
    }
?>