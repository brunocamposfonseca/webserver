<?php
    echo "<h1>1. </h1>";

    $produto = array(
        array("nome" => "Lápis", "preco" => 2,"estoque" => 10), 
        array("nome" => "Caderno","preco" => 20,"estoque" => 35),
        array("nome" => "Estojo","preco" => 59,"estoque" => 8)
    );

    foreach($produto as $item){
        echo "Nome: " . $item['nome']. " | Preço: " . $item['preco'] . "<br>";
    }

    echo "<h1>2. </h1>";

    foreach($produto as $item){
        $valor = $item['preco'] * $item['estoque'];
        echo "Valor total em estoque do " . $item['nome'] . ": $valor <br>";
    }

    echo "<h1>3. </h1>";

    $alunos = array(
        array("nome" => "Bruno", "notas" => 
            array("matematica" => 9, "ingles" => 7, "portugues" => 5)),
        array("nome" => "Matheus", "notas" => 
            array("matematica" => 9, "ingles" => 6, "portugues" => 8)),
        array("nome" => "Gustavo", "notas" => 
            array("matematica" => 8, "ingles" => 3, "portugues" => 1)),
    );

    foreach($alunos as $aluno){
        $media = round(($aluno['notas']['ingles'] + $aluno['notas']['matematica'] + $aluno['notas']['portugues']) / 3, 1);
        echo "Nome do aluno: " . $aluno['nome'] . " <br>Notas: <ul><li> Matematica = " . $aluno['notas']['matematica'] . ";</li> <li> Ingles = " . $aluno['notas']['ingles'] . ";</li> <li> Portugues = " . $aluno['notas']['portugues'] . "</li> </ul>Média: " . $media . "<br><br> <hr>" ; 
    }
?>