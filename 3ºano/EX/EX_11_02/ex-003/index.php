<?php 
    class Veiculo {
        public $marca;
        public $modelo;
        private $velocidade;

        public function getVel() {
            return $this->velocidade;
        }
        public function setVel($n) {
            $this->velocidade = $n;
        }
    }

    class Carro extends Veiculo{
        public function acelerar(){
            return "Pedal";
        }
    }

    class Moto extends Veiculo{
        public function acelerar(){
            return "Punho";
        }
    }

    $civic = new Carro();
    $civic->setVel(220);
    echo "O civic acelera pelo " . $civic->acelerar() . " numa velocidade máxima de " . $civic->getVel() . "Km/h";
    
    echo "<br><br>";

    $hornet = new Moto();
    $hornet->setVel(230);
    echo "O civic acelera pelo " . $hornet->acelerar() . " numa velocidade máxima de " . $hornet->getVel() . "Km/h";
?>