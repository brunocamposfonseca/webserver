<?php
 
class Fone{
    public $cor;
    public $modelo;
    public $tecnologia;
    public $material;
    public $tamanho;

    public function Pausar(){
        return "A música foi pausada!";
    }

    public function avançar() {
        return "A música foi avançada!";
    }

    public function retroceder() {
        return "A música foi retrocedida!";
    }

    public function tocar() {
        return "A música foi despausada!";
    }
}

echo "<h1>Fone</h1>";
$foneBluetooth = new Fone();
$foneBluetooth->cor = "preto";
echo $foneBluetooth->cor ;

class ArCondicionado {
    public $cor;
    public $fabricante;
    public $conomia;
    public $funcao;
    public $quantidadedepas;

    public function verificarInverter(){
        if($funcao == "inverter"){
            esquentar();
        }
    }

    public function refrigerar(){
        return "Refrigerando...";
    }

    public function esquentar(){
        return "Esquentando...";
    }
}

echo "<h1>Ar Condicionado</h1>";
$arCond = new ArCondicionado();
$arCond->cor = "Branco";
echo $arCond->cor ;

class Mochila{
    public $cor;
    public $tamanho;
    public $capacidade;
    public $bolsos;
    public $modelo;
   
    public function armazenar(){
        return "armazenando materiais";
    }

    public function abrir(){
        return "Abrindo mochila";
    }

    public function fechar(){
        return "Fechando mochila";
    }
}

echo "<h1>Mochila</h1>";
$mochila = new Mochila();
$mochila->cor = "Vermelha";
echo $mochila->cor ;

class Garrafa{
    public $cor;
    public $preço;
    public $formato;
    public $tamanho;
    public $capacidade;
    public $material;
    
    public function armazenar(){
        return "Armazenando líquido";
    }

    public function abrir (){
        return "Abrindo garrafa";
    }

    public function fechar (){
        return "Fechando garrafa";
    }

    public function termalizar (){
        return "Termalizando líquido";
    }
}

echo "<h1>Garrafa</h1>";
$garrafa = new Garrafa();
$garrafa->cor = "Prata";
echo $garrafa->cor ;

class Caderno{
    public $cor;
    public $estampa;
    public $fabricante;
    public $material;
    public $quantFolhas;

    public function virar(){
        return "Virando página";
    }

    public function voltar(){
        return "Voltando página";
    }

    public function rascunhar(){
        return "Rasurando página";
    }
}

echo "<h1>Caderno</h1>";
$caderno = new Caderno();
$caderno->cor = "Preto";
$caderno->estampa = "Surfista";
echo $caderno->cor;
echo '<br>Estampa: ' . $caderno->estampa;

class ContaBancaria{
    public $numConta;
    public $nome;
    public $saldo;
    
    public function sacar($num){
        $this->saldo += $num;
        return 'sacou R$' . $num;
    }

    public function depositar($num){
        $this->saldo -= $num;
        return 'depositou R$' . $num;
    }
}

echo "<h1>Pessoa 1</h1>";

$pessoa1 = new ContaBancaria();
$pessoa1->numConta = 13579;
$pessoa1->nome = "Bruno Campos Fonseca";
$pessoa1->saldo = 900;

echo $pessoa1->nome;
echo '<br>' . $pessoa1->sacar(100);
echo '<br>' . $pessoa1->depositar(200);

echo "<h1>Pessoa 2</h1>";

$pessoa2 = new ContaBancaria();
$pessoa2->numConta = 24680;
$pessoa2->nome = "Samuel Massarana Madalena";
$pessoa2->saldo = 15;

echo $pessoa2->nome;
echo '<br>' . $pessoa2->sacar(3);
echo '<br>' . $pessoa2->depositar(5);

echo "<h1>Pessoa 3</h1>";

$pessoa3 = new ContaBancaria();
$pessoa3->numConta = 12345;
$pessoa3->nome = "Brunão Attina do Grau";
$pessoa3->saldo = 100000;

echo $pessoa3->nome;
echo '<br>' . $pessoa3->sacar(4000);
echo '<br>' . $pessoa3->depositar(800);
?>