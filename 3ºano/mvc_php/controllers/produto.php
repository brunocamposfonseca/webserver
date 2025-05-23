<?php
$subRota = $caminho[1] ?? null;

switch($subRota){
    case '':
        require './models/produto.php';
        $produto = new Produto;
        $dados = $produto->queryAll();
        require './views/produtos/consultaProdutos.php';
        break;

    case 'cadastro':
        if (count($_POST) > 0){
            extract($_POST);
            require_once './models/produto.php';
            $produto = new Produto;
            $produto->validaInsert($nomeProduto, $precoProduto, $estoqueProduto, $_FILES);
            header("location: /mvc_php/produto");
        }
        require './views/produtos/cadastroProduto.php';
        break;

    case 'delete':
        if($caminho[2]){
            $id = $caminho[2];
            require_once "./models/produto.php";
            $delProd = new Produto;
            $delProd->excluirProduto($id);
            header("location: /mvc_php/produto");
            break;
        }
        header("location: /mvc_php/produto");
        break;
    default:
        if(preg_match('/^produto\/([0-9]+)$/', $url, $matches)) {
            $id = $matches[1];

            require './models/produto.php';
            $produto = new Produto;
            $dados = $produto->queryOne([":idProduto" => $id]);
            require './views/produtos/consultaProduto.php';
        }
        break;
}