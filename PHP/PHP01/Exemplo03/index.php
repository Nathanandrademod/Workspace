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
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 é ". abs($v2);
    echo "<br/>O valor da potenciação de $v1<sup>$v2</sup> é ". pow($v1, $v2);
    echo "<br/>A raizquadrada de $v1 é ". sqrt($v1);
    echo "<br/>O valor de $v2 arredondado é ". round($v2); // ceil floor
    echo "<br/>A parte inteira de $v2 é ". intval($v2);
    echo "<br/>O valor de $v1 em moeda é R$". number_format($v1,2,",", ".");
?>
    
    </body>
    

</html>