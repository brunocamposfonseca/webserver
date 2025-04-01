<?php
    include "../conn.php";
    $data = $db->query("SELECT * FROM vendas");
    $data->execute();
    $qnt = $data->rowCount();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    try{
        $dataVc = $db->prepare("SELECT nome FROM clientes WHERE id = :id");
        $dataVc->bindParam(':id', $result[0]['idCliente']);
        $dataVc->execute();
        if ($dataVc->rowCount() === 0) {
            throw new Exception("Cliente não encontrado");
        }
        $cliente = $dataVc->fetchColumn();
        echo $cliente;
    }catch(PDOException $e){
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'error' => 'Erro no banco de dados: ' . $e->getMessage()
        ]);
    }catch(Exception $e){
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }


    
    $time = $result[0]["dataVenda"];
    $time = str_replace('-','/',$time);
    echo $time;
    
    $time = substr($time,5,(7 - 5 + 1)) . substr($time,8,(9-8+1)) . $time[4] . substr($time, 0, (3-0+1));
    echo "<br>" . $time;
    


    
    
        
?>