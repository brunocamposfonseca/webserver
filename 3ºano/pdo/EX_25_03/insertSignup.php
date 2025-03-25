<?php
    include_once('conn.php');
    $name = $_POST['name'];
    $job = $_POST['job'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $dados = $db->query("SELECT * FROM admin WHERE email = '$email'");
    $count = $dados->fetchColumn();
    if($count > 0){
        $_SESSION["erro"] = "Email ja cadastrado...";
        header("location: signup.php");
    } else {
        if(isset($name) and isset($job) and isset($email) and isset($pass)){
            $state = $db->prepare("INSERT INTO admin (nome, cargo, email, senha) VALUES (:name, :job, :email, :pass)");
            $state->bindParam(':name', $name);
            $state->bindParam(':job', $job);
            $state->bindParam(':email', $email);
            $state->bindParam(':pass', $pass);
            $state->execute();
            header("location: index.php");
            }
        }
?>