<!doctype html>
<html lang="pt-br">
    <head>
        <title>Primeiro exemplo PHP</title>
    <meta charset="utf-8">
    <style>
        h2 {
           font: 12pt Arial;
           color: blueviolet;
            font-weight: bold;
        }
    </style>
    </head>  
    <body>
        <p>Este aqui é o conteudo da pagina HTML</p>

<?php 
  $preco = $_GET["p"];
  $aa = $_GET["aa"];
  echo "O preço do produto é de R$ ". number_format($preco, 2);
  $preco += $preco*10/100;
  echo "<br/>O  novo preço do produto com o desconto de 10% é de R$ ". number_format($preco, 2);
  echo "<br/> O ano atual é $aa e o ano anterior é ". --$aa; 

  $a =10;
  $b= &$a;
  $b += 2; //altera o valor para aprender mais :)
  echo "<br/><br/> $a";
  echo "<br/><br/>$b"; 

  //VARIAVEIS VARIANTES

  $X = "abc";
  $$X = "def";
  echo "<br/> O conteudo da variavel X é $X";
  echo "<br/> A variavel  ABC criada recebeu o valor $abc";

  //  OPERADOR UNÁRIO
  // EXPRESSÃO?VERDADEIRO:FALSO
$a = 4;
$b = 3;
  $maior=$a>$b?$a:$b;
 
?>
    
    </body>
    
</html>