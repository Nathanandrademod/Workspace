<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
<?php
    $txt="Curso em video";
    $tamanho = strlen($txt);
    echo "<h2><br><br><br>O texto: $txt <br><br>tem o tamanho de $tamanho Letras.</h2>";

    $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap ";
    $r = wordwrap($t, 40, "<br/>\n", false);
    echo "$r<br><br><br>";
    
    //mb_strlen
    $nome="   josé da silva   ";
    echo "A variavel nome receubeu ";
    echo(mb_strlen($nome)); 
    echo " caracteres ."; echo "<br><br>";

    //trim
    $novo=trim($nome);
    echo($novo); echo "<br>";  
    echo "A variavel novo recebeu ";
    echo(mb_strlen($novo)); 
    echo " caracteres ."; echo "<br><br>";

    //ltrim
    $novo=ltrim($nome);
    echo($novo); echo "<br>";  
    echo "A variavel novo recebeu ";
    echo(mb_strlen($novo)); 
    echo " caracteres ."; echo "<br><br>";
    
    //rtrim
    $novo=rtrim($nome);
    echo($novo); echo "<br>";  
    echo "A variavel novo recebeu ";
    echo(mb_strlen($novo)); 
    echo " caracteres ."; echo "<br><br>";
 

    ?>
</div>
</body>
</html>