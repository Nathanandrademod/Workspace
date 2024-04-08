<?php
class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo  $this->nome. " com a idade de ".$this->idade." acabou de falar<br><br>";
    }
}


$objeto = new Pessoa();
$objeto->nome = "Nathan Andrade";
$objeto->idade =25;
$objeto->Falar();
var_dump($objeto);
echo "<br>".$objeto->nome;
echo "<br>".$objeto->idade;

?>