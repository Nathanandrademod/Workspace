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
        
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br/>" ;
        $resultado = ($tipo == "soma") ? $n1+$n2 : $n1*$n2; 
        echo "<br/> O resultado sera $resultado <br/>";

   $a = 3;
   $b = "3";
   $r = ($a == $b)?"SIM":"NÃO";
   echo "<br/><br/><br/> As variaveis A e B são iguais? <br/>resposta: $r";

   $a = 3;
   $b = "3";
   $r = ($a === $b)?"SIM":"NÃO";
   echo "<br/><br/><br/> As variaveis A e B são indenticas? <br/> resposta: $r";





        
?>
    
    </body>
    

</html>