<?php
        session_start();
        include "conn.php";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $obs = $_POST["obs"];

        include "./validateClient.php";
        if(validaCliente($name, $email, $obs)){
            $dados = $db->query("SELECT email FROM clientes WHERE email = '$email'");
            $count = $dados->fetchColumn();
            if($count > 0){
                $_SESSION["erroEmail"] = "Email ja cadastrado...";
                header("location: client.php");
            } else {
                if(isset($name) and isset($email)){
                    $state = $db->prepare("INSERT INTO clientes (nome, email, observacao) VALUES (:nome, :email, :observacao)");
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $obs = $_POST["obs"];
                    $state->bindParam(':nome', $name);
                    $state->bindParam(':email', $email);
                    $state->bindParam(':observacao', $obs);
                    $state->execute();
                }
            }
        }
        header("location: client.php");
?>