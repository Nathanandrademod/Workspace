<!doctype html>
<html lang="pt-br">
    <head>
        <title>Primeiro exemplo PHP</title>
    <meta charset="utf-8">
    <style>
        h2 {
            color: aqua;
            text-shadow: 1px 1px 1px black;
        }
    </style>
    </head>  
    <body>
        <p>Este aqui é o conteudo da pagina HTML</p>

        <h1>Testando PHP</h1>
        <?php 
        $n1 = 1;
        $n2 = 2;
        $n3 = $n1 + $n2;
        echo "A variavel n1 mais n2 vale $n3<br/><br/><br/>";



      $n1 = 2;
      $n2 = 2;
      $m = ($n1+$n2) / 2;
      echo "<br/>A média vale ". ($n1+$n2);
      echo "<br/>A soma vale ". ($n1+$n2);
      echo "<br/>A subitração vale ". ($n1-$n2);
      echo "<br/>A multiplicação vale ". ($n1*$n2);
      echo "<br/>A divisao vale ". ($n1/$n2);
      echo "<br/>A modulo vale ". ($n1%$n2);
      /*EXEMPLO DO QUE SIGNIFICA MODULO AQUI ELE PEGA O 2 E DIVIDE POR 2 QUE SOBRA ZERO 0 DICA :(@)*/
      


        ?> 

    
    </body>

</html>