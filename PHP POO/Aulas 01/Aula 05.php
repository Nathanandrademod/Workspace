<?php
    class Veiculo{
        public $modelo;
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
    }


    class Moto extends Veiculo {
        public function rodas(){
            echo "<br> moto tem 2 rodas<br>";
        }
    }
  
    $carro = new Carro();
    $carro->modelo = "Fiat uno";
    $carro->cor = "Branco";
    $carro->ano = "2008";
    $carro->Andar();
    $carro->rodas();
    echo "<br>";
    var_dump($carro);
    echo "<br><br>";
    echo "<br>";


    $moto = new Moto();
    $moto->modelo = "Honda Biz";
    $moto->cor = "Azul";
    $moto->ano = "2017";
    $moto->parar();
    echo "<br>";
    $moto->rodas();
    var_dump($moto);
?>