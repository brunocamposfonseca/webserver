<?php
    $_SESSION['valorEmaiL'] = "";
    $_SESSION['valorPASS'] = "";
    $erroEmaiL = "";
    $erroPASS= "";

    include_once "./conn.php";

    function limpaEntrada($dado) {
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }

    function validaLogin($email, $senha){
        $erroEmaiL = "";
        $erroPASS = "";

        if(empty($email)){
            $erroEmaiL = "Preencha corretamente o campo e-mail!";
        }else{
            $email = limpaEntrada($email);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erroEmaiL = "Preencha corretamente o campo e-mail!";
            }
        }

        // if(empty($senha)){
        //     $erroPASS = "Preencha corretamente o campo senha";
        // }else{
        //     $senha = trim($senha);
        // }

        if(empty($erroEmaiL) && empty($erroPASS)){
            return TRUE;
        }else{
            echo "Erro...";
            $_SESSION['erroEmaiL'] = $erroEmaiL;
            $_SESSION['erroPASS'] = $erroPASS;
            
            $_SESSION['valorEmaiL'] = $email;
            $_SESSION['valorPASS'] = $senha;
            return false;
        }
        if(!empty($email) && !empty($senha)){
            $stmt = $db->query("SELECT * FROM ´admin´ WHERE email = '$email' AND senha = '$senha'");
            $stmt->execute();
            $linhas = $stmt->rowCount();
            if ($linhas != 1){
                echo "<br> PALMEIRAS<br>";
            }
        }
    }

?>