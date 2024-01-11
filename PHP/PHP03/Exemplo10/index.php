<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
<?php
//click para saber mais: https://www.youtube.com/watch?v=1KdhIz0Gh5A&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k&index=18 

  //substr_count
  $frase = "Eu estou aprendendo PHP no Curso em Video de PHP";
  echo "$frase<br>";
  $cont = substr_count($frase,"PHP");
  print("A palavra PHP foi encontrado $cont vezes"); echo "<br><br>";

  //substr
  $site = "Curso em Video";
  $sub = substr($site,1,15);
  echo "$sub"; echo "<br><br>";

  //str_pad
  $nome = "Guanabara";
  $novo = str_pad($nome,30,"-", STR_PAD_BOTH); //O STR_PAD_RIGHT pode ser mudado para:STR_PAD_CENTER OU STR_PAD_LEFT para colocar espacos coloque copie isso -> "⠀"
  echo "Meu professor $novo é lindo!!"; echo "<br><br>";
  
  //str_repeat
  $txt = str_repeat("Php",5);
  print("O texto gerado foi $txt");
  echo "<br><br>";
  print(str_repeat("----",20)); echo "<br><br>";

  //str_replace
  $frase = "Gosto de estudar Matematica";
  $novafrase = str_replace("Matematica","PHP", $frase);
  echo "$novafrase";echo "<br><br>";

    //str_replace
    $frase = "Gosto de estudar Matematica";
    $novafrase = str_replace("matematica","PHP", $frase);
    echo "$novafrase";echo "<br><br>";

   //str_ireplace
   $frase = "Gosto de estudar Matematica";
   $novafrase = str_ireplace("maTeMaTica","PHP", $frase);
   echo "$novafrase";echo "<br><br>";
 

  ?>
</div>
</body>
</html>