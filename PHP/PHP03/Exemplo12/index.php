<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
    <pre>
<?php
//para saber mais click aqui ->: https://www.youtube.com/watch?v=g8Gr2NIMxQQ&list=PLHz_AreHm4dm4beCCCmW4xwpmLf6EHY9k&index=19 
 
     $v = array("nome" => "Ana ",
        "idade" => 23 ,
        "peso" => 65.5
    );print_r($v);echo "<br><br>";

    
    foreach ($v as $key => $value) {
        echo " o campo $key possui o conteudo $value <br>";
        }echo "<br><br><br><br>";



    $n = array(array(2,3), //0
            array(3,4), //1
            array(9,5), //2
                //0,1 
    );print_r($n);echo "<br>";

    $n[2][0]=$n[1][1];
    print_r($n);echo "<br>";



  ?>
  </pre>
</div>
</body>
</html>