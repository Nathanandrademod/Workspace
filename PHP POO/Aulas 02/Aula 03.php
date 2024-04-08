<?php
class Animal  {
    public function Andar(){
        echo "o animal andou";
    }
    public function Correr(){
        echo "o Animal correu";
    }

}
class Cavalo extends Animal{
    public function Andar(){
        $this->Correr();
    }
}
$animal = new cavalo();
$animal->Andar();

//aula https://www.youtube.com/watch?v=xVftCc0QbE8

?>