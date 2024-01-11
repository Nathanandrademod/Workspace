<!doctype html>
<html lang="pt-br">
    <head>
        <title>Primeiro exemplo PHP</title>
    <meta charset="utf-8">
    </head>  
    <body>
        <p>Este aqui é o conteudo da pagina HTML</p>

<?php 

  //  OPERADOR UNÁRIO
  // EXPRESSÃO?VERDADEIRO:FALSO

  $nota1 = $_GET["n1"];
  $nota2 = $_GET["n2"];
  $m = ($nota1+$nota2)/2;
  echo "A média entre $nota1 e $nota2 é $m <br/>";
  $sit = ($m<6)?"REPROVADO":"APROVADO";
  echo "A situação do aluno é $sit ";


  //////// OOOOOU FAAÇA ASSIM :

  
  $nota1 = $_GET["n1"];
  $nota2 = $_GET["n2"];
  $m = ($nota1+$nota2)/2;
  echo "<br/><br/><br/>A média entre $nota1 e $nota2 é $m <br/>";
  echo "A situação do aluno é ". (($m<6)?"REPROVADO":"APROVADO");

  $ano = $_GET["an"];
  $idade = 2022 - $ano;
  echo "<br/><br/><br/>Quem naceu em $ano tem a idade de $idade anos <br/>";
  $tipo = ($idade>=18 && $idade <65)?"OBRIGATORIO ":"NÃO É OBRIGATORIO";
  echo "<br/>E dessa forma seu voto é $tipo";



        
?>
    
    </body>
    

</html>