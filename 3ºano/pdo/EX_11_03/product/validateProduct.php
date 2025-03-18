<?php
    $_SESSION['valorNomeP'] = "";
    $_SESSION['valorCode'] = "";
    $_SESSION['valorStock'] = "";
    $_SESSION['valorPreco'] = "";
    $erroNomeP = "";
    $erroCode = "";
    $erroStock = "";
    $erroPreco = "";

    function limpaEntrada($dado) {
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado);
        return $dado;
    }

    function validaProduto($nomep, $codebar, $stock, $preco){
        $erroNomeP = "";
        $erroCode = "";
        $erroStock = "";
        $erroPreco = "";
        
        if (empty($nomep)) {
            $erroNomeP = "O nome do produto é obrigatório";
        } else {
            $nome = limpaEntrada($nomep);
            if (strlen($nome) < 3) {
                $erroNomeP = "O campo nome do produto precisa possuir no minimo 3 caracteres";
            }
        }

        if (empty($codebar) ) {
            $erroCode = "O Código de Barras é obrigatório";
        } else {
            $codebar = limpaEntrada($codebar);
            if (strlen($codebar) != 13) {
                $erroCode = "Formato de Código de Barras inválido";
            }else{
                $oi = array(1,0,1,0,1,0,1,0,1,0,1,0,4);
                $soma = 0;
                for($i=0; $i <13; $i++){
                    if($i%2 == 0){
                        $soma += $oi[$i];
                    }else{
                        $soma +=$oi[$i];
                    }
                } 
                if($soma%10 != 0){
                    $erroCode = "Código de Barras está no formato errado";
                }
            }
        }

        if (empty($stock)) {
            $erroStock = "Estoque é necessário, verifique se há</br>somente números no campo!";
        }else{
            $stock = limpaEntrada($stock);
        }

        if (empty($preco)) {
            $erroPreco = "O preço deve ser superior a $0,01";
        }else{
            $preco = limpaEntrada($preco);
        }

        if (empty($erroNomeP) && empty($erroCode) && empty($erroStock) && empty($erroPreco)) {
            echo "Dados validados com sucesso!";
            return true;
        }else{
            echo "Erro...";
            $_SESSION['erroNomeP'] = $erroNomeP;
            $_SESSION['erroCode'] = $erroCode;
            $_SESSION['erroStock'] = $erroStock;
            $_SESSION['erroPreco'] = $erroPreco;

            $_SESSION['valorNomeP'] = $nome;
            $_SESSION['valorCode'] = $codebar;
            $_SESSION['valorStock'] = $stock;
            $_SESSION['valorPreco'] = $preco;
            return false;
            // header("Location: ../client.php");
        }
    }
?>