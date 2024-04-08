<?php
   abstract class Banco{
        protected $saldo;
        protected $limiteSaque;
        protected $juros;

        public function setSaldo($s){
            $this->saldo = $s;

        }
        public function getSaldo(){
            return $this->saldo;

        }

        abstract protected function Sacar($s);
        abstract protected function Depositar($d);
    }

    class Itau extends Banco{

        public function Sacar($s){
            echo "<br> sacou ".$s;
           // $this->saldo = $this->saldo - $s;  //metodo 1
           $this->saldo -= $s;  //metodo 2
        }

        public function Depositar($d){
            $this->saldo += $d; 
            echo "<br> depositou ".$d;
        }
    }



    $itau = new  Itau();

    $itau->setSaldo(1000); 

    echo "<hr> Saldo: ".$itau->getSaldo();
    $itau->Sacar(100); 
    echo "<hr> Saldo: ".$itau->getSaldo();


    $itau->Depositar(1000); 
    echo "<hr> Saldo: ".$itau->getSaldo();
    $itau->Sacar(260); 
    echo "<hr> Saldo: ".$itau->getSaldo();

?>