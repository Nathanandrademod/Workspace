<?php
class Pedido{
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Nathan Andrade";
$cliente->endereco = "rua xx, numero: 211";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);