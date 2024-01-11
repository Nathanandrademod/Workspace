<?php
class Fruta
{
    //Propriedades ou atributos da Classe
    var $nome;
    var $tipo;
    //Construtor da Classe: Essa função é executada todas as vezes em que uma instância da classe é criada.
//Como abaixo, essa função pode ser vazia. Ou seja, não realiza nenhuma ação.
    public function __construct()
    {
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}

// instanciando um objeto da classe Fruta
$fruta1 = new Fruta();
// utilizando o objeto criado para chamar o método “setNome”
$fruta1->setNome("morango");
// utilizando o objeto criado para chamar o método “setTipo”
$fruta1->setTipo("vermelha");
// utilizando o comando “echo” para imprimir o resultado da chamada ao método “getNome” 
echo $fruta1->getNome(), "<br/>";
// utilizando o comando “echo” para imprimir o resultado da chamada ao método “getTipo” 
echo $fruta1->getTipo();

?>