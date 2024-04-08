<?php
    class Veiculo{
        public $modelo;
        public $cor;
        public $ano;

        public function Andar(){
            echo "Andou";
        }

        private function Parar(){
            echo "<br> metodo private -> Parou";

        }
        public function mostrarAcao(){
            $this->Parar();
        }
        protected function buzina(){
            echo "<br> Apertou a buzina";
        }
        public function mostrabuzina(){
            $this->buzina();
         }
    }


    class carro extends Veiculo{

    }

$carro = new Veiculo();
$carro->Andar();
$carro->mostrarAcao();
$carro->mostrabuzina();
 
$carro2 = new carro();
$carro2->mostrabuzina();
?>