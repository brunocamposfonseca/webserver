<?php
    class Pessoa{
        public $nome;
        protected $idade = 30;
    }

    class Funcionario extends Pessoa{
        public $salario;
        protected function calcularBonus(){
            return 'Bônus padrão (0%)';
        }
    }

    class Gerente extends Funcionario{
        public function calcularBonus(){
            $this->salario *= 1.20;
            return $this->salario;
        }
    }

    class Desenvolvedor extends Funcionario{
        public function calcularBonus(){
            $this->salario *= 1.10;
            return $this->salario;
        }
    }

    $pessoa = new Desenvolvedor();
    $pessoa->nome = "Brunin Attina do grau";
    $pessoa->salario = 6000;
    echo $pessoa->calcularBonus();

?>