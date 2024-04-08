<?php
    class Veiculo{
        protected $modelo;
        public $cor;
        public $ano;

        public function Andar(){
            echo "Andou";
        }
        public function Parar(){
            echo "Parou";

        }
    }



    class Carro extends Veiculo{
        public function rodas(){
            echo "<br> carro tem 4 rodas<br>";
        }
        
        public function setModelo($m){
            $this->modelo = $m;
        }

                
        public function getModelo(){
        return $this->modelo;        
    }

    }


    class Moto extends Veiculo {
        public function rodas(){
            echo "<br> moto tem 2 rodas<br>";
        }
    }


    $carro = new Carro();
    $carro->setModelo("Corola");
    echo $carro->getModelo();
?>