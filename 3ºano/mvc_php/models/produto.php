<?php

require './models/database.php';

class Produto{
    private $conexao;

    public function __construct(){
        $this->conexao = new Database;
    }
    
    public function queryOne($parameters){
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos WHERE idProduto = :idProduto", $parameters);
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function queryAll(){
        $resultado = $this->conexao->executeQuery("SELECT * FROM produtos");
        $dados = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function prepareInsert(array $parameter = []){
        var_dump($parameter);
        $stmt = $this->conexao->executeQuery("INSERT INTO produtos (nomeProduto, fotoProduto, precoProduto, estoqueProduto) VALUES (:nomeProduto, :fotoProduto, :precoProduto, :estoqueProduto)", $parameter);
    }

    public function validaInsert($nome, $preco, $estoque, array $FILE = []){
        if(strlen($nome) < 3 || strlen($nome) > 100){
            return false;
        }
        if($preco <=0){
            return false;
        }
        if($estoque<0){
            return false;
        }
        
        $_UP["pasta"] = 'fotos/';
        $_UP["tamanho"] = 1024 * 1024 * 2;
        $_UP["extensoes"] = array('jpeg','jpg','png','gif');
        $_UP["renomeia"] = false;
        $_UP["erros"][0] = "Não houve erro";
        $_UP["erros"][1] = "O arquivo no upload é maior do que o limite do PHP";
        $_UP["erros"][2] = "O arquivo ultrapassa o limite de tamanho especificado no HTML";
        $_UP["erros"][3] = "O upload do arquivo foi feito parcialmente";
        $_UP["erros"][4] = "Não foi feito o upload do arquivo";
    
        if ($FILE["fotoProduto"]["error"] != 0) {
            die("Não foi possivel fazer o upload,erro: ".$_UP["erros"][$FILE["fotoProduto"]["error"]]);
            exit;
        }
        $ext = explode('.', $FILE["fotoProduto"]["name"]);
        $exten = end($ext);
        $extensao = strtolower($exten);/*vai deixar a "exten" minusculo*/
        if (array_search($extensao, $_UP["extensoes"]) === false) {
            echo "Por Favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
            exit;
        }   
        if ($_UP["tamanho"] < $FILE["fotoProduto"]["size"]) {
            echo "O arquivo enviado é muito grande, envie arquivos de até 2 MB";
            exit;
        }
        //renomeia a imagem
        if ($_UP["renomeia"] == true) {
            $fotoProduto = time().'.jpg';
        }else{
            $fotoProduto = $FILE["fotoProduto"]["name"];
        }
        if (move_uploaded_file($FILE["fotoProduto"]["tmp_name"],$_UP["pasta"].$fotoProduto)) {
            $this->prepareInsert([":nomeProduto" => $nome, ":fotoProduto" => $fotoProduto, ":precoProduto" => $preco, ":estoqueProduto" => $estoque]);
        }
    }

    public function excluirProduto($id){
        $this->conexao->executeQuery("DELETE FROM produtos WHERE idProduto = :id", [":id" => $id]);
    }
}