<?php
    class Veiculo{

        //Atributos:
        public $marca;
        public $modelo;
        protected $seguro;
        private $renavam;

        //Métodos:
        public function ligar(){
            return "O " . $this->marca .  " está ligado!";
        }
    }

    //$polo = new Veiculo("Volkswagem", "1234567890");
    $polo = new Veiculo();
    $polo->marca = "Volkswagem";
   
    echo $polo->ligar();

    //

    class Pessoa{
        public $nome;

        public function falar(){
            return "<br>O meu nome é ".$this->nome;
        }
    }

    $bruno = new Pessoa();
    $bruno->nome = "Bruno Campos Fonseca";
    echo $bruno->falar();
?>