<?php
    class Documento {
        private $numero;
        public function getNumero() {
            return $this->numero;
        }
        public function setNumero($n) {
            $this->numero = $n;
        }
    }

    class CPF extends Documento {
        public function validar():bool {
            $numeroCPF = $this->getNumero();
            $numeroCPF = preg_replace( '/[^0-9]/is', '', $numeroCPF );
     
            if (strlen($numeroCPF) != 11) {
                return false;
            }

            if (preg_match('/(\d)\1{10}/', $numeroCPF)) {
                return false;
            }

            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $numeroCPF[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($numeroCPF[$c] != $d) {
                    return false;
                }
            }
            return true;
        }
    }

  $doc = new CPF();
  $doc->setNumero("123.453.048-12");

  if ($doc->validar()){
    echo "O CPF abaixo é válido!";
  } else {
    echo "O CPF abaixo é inválido...";
  }
  
  echo "<br/>";
  echo $doc->getNumero();
?>