<?php 
    abstract class Animal{
        abstract function fazerSom();
        public function mover(){
            return "anda";
        }
    }
    
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Late";
        }
    }

    class Gato extends Animal{
        public function fazerSom(){
            return "Mia";
        }
    }

    class Passaro extends Animal{
        public function fazerSom(){
            return "Canta";
        }

        public function mover(){
            return "Voa e " . parent::mover();
        }
    }

    echo "<h1>Cachorro</h1>";
    $pluto = new Cachorro();
    echo $pluto->fazerSom();

    echo "<h1>Gato</h1>";
    $garfield = new Gato();
    echo $garfield->fazerSom();

    echo "<h1>Passaro</h1>";
    $piupiu = new Passaro();
    echo $piupiu->fazerSom();
    echo "<br>" . $piupiu->mover()
?>