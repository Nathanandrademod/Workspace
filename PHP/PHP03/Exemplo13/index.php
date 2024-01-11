<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
    <pre>
<?php
//para saber mais click aqui ->: https://www.youtube.com/watch?v=1f5H4mqCGHo&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k&index=20
    $v = array("A","J","M","K","X","N");
    echo "O vetor tem ". count($v). " elementos <br>"; //count
    print_r($v);echo "<br><br>";

    $v = array("A","J","M","K","X","N");
    $total = count($v);//count
    echo "O vetor tem $total elementos <br>";
    print_r($v);
    var_dump($v);//var_dump
    echo "<br><br>";

    $v = array("A","J","M","K","X","N");
    array_push($v,7);//array_push coloca um vetor na ultima posição
    array_pop($v);//array_pop elimina o ultimo elemento do vetor 
    array_unshift($v,7);//array_unshift coloca um vetor na primeira posição
    array_shift($v);//array_shift elimina o primeiro elemento do vetor 
    print_r($v);

  ?>
  </pre>
</div>
</body>
</html>