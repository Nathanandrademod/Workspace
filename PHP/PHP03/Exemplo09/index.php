<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
<?php
//click para saber mais: https://www.youtube.com/watch?v=1KdhIz0Gh5A&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k&index=18 

  //strtolower
  $nome = "Nathan Andrade Modanesi";
  $strl = strtolower($nome);
  echo "Seu nome é $strl";
  echo "<br><br>";

  //strtoupper
  $nome = "Nathan Andrade Modanesi";
  print("Seu nome é ".strtoupper($nome));
  echo "<br><br>";

  //ucfirst
  $nome = "nathan andrade modanesi";
  print("Seu nome é ".ucfirst($nome));
  echo "<br><br>";

   //ucwords
   $nome = "nathan andrade modanesi";
   $strl = ucwords(strtolower($nome));
   echo "Seu nome é $strl";
   echo "<br><br>"; 

   //strrev
   $nome = "nathan andrade modanesi";
   print("Seu nome reverso é ".strrev($nome));
   echo "<br><br>";

   //strpos
   $frase = "Estou aprendendo PHP";
   $pos = strpos($frase, "PHP");
   echo "A string foi encontrada na posição $pos";
   echo "<br><br>";

   //stripos
   $frase = "Estou aprendendo PHP";
   $pos = stripos($frase, "php");
   echo "A string foi encontrada na posição $pos";
   



  ?>
</div>
</body>
</html>