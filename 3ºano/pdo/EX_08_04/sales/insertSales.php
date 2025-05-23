<?php
    include "../conn.php";
    header("Content-Type: application/json");

    try {
        $json = file_get_contents('php://input');
        if (empty($json)) {
            throw new Exception("Nenhum dado JSON recebido");
        }

        // Validando estrutura do JSON
        $data = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("JSON inválido: " . json_last_error_msg());
        }

        // Validação do Cliente
        if (!isset($data['client'])) {
            throw new Exception("Estrutura de dados inválida: campo 'venda' ausente");
        }

        if (empty($data['client']['idClient'])) {
            throw new Exception("ID do cliente é obrigatório");
        }

        if (!is_numeric($data['client']['idClient'])) {
            throw new Exception("ID do cliente deve ser numérico");
        }

        if (empty($data['client']['nameClient'])) {
            throw new Exception("Nome do cliente é obrigatório");
        }

        // Validação do Produto
        if (!isset($data['product']) || !is_array($data['product'])) {
            throw new Exception("Estrutura de dados inválida: campo 'produtos' ausente ou não é array");
        }

        if (count($data['product']) === 0) {
            throw new Exception("Nenhum produto foi enviado");
        }

        foreach ($data['product'] as $product) {
            if (empty($product['id'])) {
                throw new Exception("ID do produto é obrigatório");
            }

            if (empty($product['name'])) {
                throw new Exception("Nome do produto é obrigatório");
            }

            if (!isset($product['quantity']) || $product['quantity'] <= 0) {
                throw new Exception("Quantidade do produto deve ser maior que zero");
            }

            if (!is_numeric($product['price']) || $product['price'] <= 0) {
                throw new Exception("Preço do produto deve ser um número positivo");
            }
        }

        // Verifica se cliente existe
        $stmt = $db->prepare("SELECT id FROM clientes WHERE id = :id");
        $stmt->bindParam(':id', $data["client"]["idClient"]);
        $stmt->execute();
        if ($stmt->rowCount() === 0) {
            throw new Exception("Cliente não encontrado");
        }

        $stmt = $db->prepare("INSERT INTO vendas(idCliente) VALUES(:cliente)");
        $stmt->bindParam(':cliente', $data['client']['idClient']);
        $stmt->execute();

        $idSale = $db->lastInsertId();

        $products = $data["product"];
        foreach ($products as $product) {
            $stmt = $db->prepare("INSERT INTO produtosvendidos(idVenda, idProduto, preco, quantidade) VALUES(:idVenda, :idProduto, :precoProduto, :quantidade)");
            $stmt->bindParam(':idVenda', $idSale);
            $stmt->bindParam(':idProduto', $product['id']);
            $stmt->bindParam(':precoProduto', $product['price']);
            $stmt->bindParam(':quantidade', $product['quantity']);
            $stmt->execute();
            echo "Product ID: {$product['id']}, Name: {$product['name']}, Quantity: {$product['quantity']}\n";
        }

        // Verifica estoque dos produtos
        foreach ($data['product'] as $product) {
            $stmt = $db->prepare("SELECT estoque FROM produtos WHERE id = :id");
            $stmt->bindParam(":id", $product["id"]);
            $stmt->execute();
            $stock = $stmt->fetchColumn();

            if ($stock === false) {
                throw new Exception("Product ID {$product['id']} not found");
            }

            if ($stock < $product['quantity']) {
                throw new Exception("Estoque insuficiente para o produto ID {$product['id']}");
            }
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'error' => 'Erro no banco de dados: ' . $e->getMessage()
        ]);
    } catch (Exception $e) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }
?>