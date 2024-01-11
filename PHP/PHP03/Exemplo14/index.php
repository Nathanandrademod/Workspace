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

    echo "<br><br><h3>sort:<h3>";
    $v = array("7","5","9","0","4","2");
    sort($v); print_r($v);  //sort 

    echo"<br><br><h3>rsort:<h3>";
    $v = array("7","5","9","0","4","2");
    rsort($v); print_r($v);  //rsort

    echo"<br><br><h3>asort:<h3>";
    $v = array("7","5","9","0","4","2");
    asort($v); print_r($v);//asort se não entender clique no link a cima
 
    echo"<br><br><h3>arsort:<h3>"; 
    $v = array("7","5","9","0","4","2");
    arsort($v); print_r($v);  //arsort se não entender clique no link a cima
    echo"<br><br>";
  ?>
  </pre>
</div>
</body>
</html>