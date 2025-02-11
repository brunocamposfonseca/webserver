<?php
    abstract class Produto{
        public $nome;
        public $preco;
        protected $estoque;

        public function setEstq($n){
            $this->estoque = $n;
        }

        protected function calcularDesconto(){
            return $this->preco;
        }
    }

    class Eletronico extends Produto{
        public function calcularDesconto(){
            if($this->estoque < 5){
                $this->preco *= 0.90;
            }

            $this->preco *= 0.90;
            return $this->preco;
        }
    }

    class Roupa extends Produto{
        public function calcularDesconto(){
            if($this->estoque < 5){
                $this->preco *=0.90;
            }

            $this->preco *= 0.80;
            return $this->preco;
        }
    }

    $fone = new Eletronico();
    $fone->nome= "Fone de Ouvido Bluetooth";
    $fone->preco = 150;
    $fone->setEstq(4);

    echo $fone->calcularDesconto();

    echo "<br>";

    $camisa = new Roupa();
    $camisa->nome= "Fone de Ouvido Bluetooth";
    $camisa->preco = 80;
    $camisa->setEstq(6);

    echo $camisa->calcularDesconto();


?>