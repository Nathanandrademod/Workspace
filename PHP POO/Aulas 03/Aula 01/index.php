<?php
require 'classes/produto.php';
require 'models/produto.php';


    //métado 1 namespace
$produto = new \models\Produto();
$produto->mostrarDetalhes();



    //métado 2 use
use classes\Produto;

$produto = new Produto();
$produto->mostrarDetalhes();

    //métado 3 dando apelído
    use models\Produto as productModel;

    $produto = new productModel();
    $produto->mostrarDetalhes();
    


?>