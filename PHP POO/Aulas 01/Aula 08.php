<?php
    class Veiculo{
        private $modelo;
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
    echo"<br>";
    //metodo private só é possivel setar o valor dentro do escopo da classe  para entender click no link. https://www.youtube.com/watch?v=S3WuyHmNqeo&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=6
    var_dump($carro);
?>