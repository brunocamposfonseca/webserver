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
        // echo $cliente;
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
    // echo substr($time, 11, (12-11+1));



    
    $hour = substr($time,10, (18-10+1));
    $time = substr($time,5,(7 - 5 + 1)) . substr($time,8,(9-8+1)) . $time[4] . substr($time, 0, (3-0+1));
    $min = $hour[3] . $hour[4] . $hour[5] .$hour[3] .$hour[7] . $hour[8];
    $hour = intval($hour[1] . $hour[2]);
    if($hour < 12){
        if($hour == 00){
            $hour = 12;
            $hour = "$hour$min AM";
        }else{
            $hour = "$hour$min AM";
        } 
    }else{
        if($hour > 12 && $hour != 0){
            $hour = $hour - 12;
            $hour = "$hour$min PM";
        }
    }
    echo $hour;
    
    
        
?>