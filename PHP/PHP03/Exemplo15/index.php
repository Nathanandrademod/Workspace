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
    ksort($v); print_r($v);  //ksort 

    echo"<br><br><h3>rsort:<h3>";
    $v = array("7","5","9","0","4","2");
    krsort($v); print_r($v);  //krsort

   
  ?>
  </pre>
</div>
</body>
</html>