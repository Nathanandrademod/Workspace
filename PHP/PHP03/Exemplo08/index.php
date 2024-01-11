<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
<?php
// https://www.youtube.com/watch?v=hQLyylI2LwI&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k&index=17 para entender melhor

//ATENÇÃO PODE DAR COMFLITO DEPENDENDO DO CODIGO POR EXEMPLO DÉ UMA OLHADA NA FUNÇÃO STR_SPLIT


  //str_word_count
 $frase = "Eu vou estudar PHP";
 $cont = str_word_count($frase,0);
 echo $cont;
 echo "<br><br><br>";

 //explode 
 $site = "Curso em Video";
 $vetor = explode(" ",$site);
 print_r($vetor);
 echo "<br><br><br>";

//str_split
 $nome = "Maria";
 $vetor = str_split($nome);
 print_r($vetor);
 echo "<br><br><br>";

 //implode
 $vetor[0]="curso";
 $vetor[1]="em";
 $vetor[2]="video";
 $texto=implode("#",$vetor);
 print($texto);
 echo "<br><br><br>";

  //join
  $vetor[0]="curso";
  $vetor[1]="em";
  $vetor[2]="video";
  $texto=join(" ",$vetor);
  print($texto);
  echo "<br><br><br>";

  //chr
  $letra = chr(67);
  echo "A letra do codigo 67 é $letra";
  echo "<br><br><br>";

  //ord
  $letra = "C";
  $cod = ord($letra);
  print("A letra $letra tem o código $cod");

    ?>
</div>
</body>
</html>