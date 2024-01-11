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
 
 //array
 $n = array(3,5,8,2);
 $n[] = 7; 
 print_r($n); echo"<br><br>";

 //range
 $c = range(5,20,2);
 print_r($c);  echo"<br><br>";

 
 //foreach
  $idade= array("Carlos"=>"27", "João"=>"33", "Paulo"=>"14", "Paulinho"=>"5", "Max"=>"8");
                echo "<br>";
                foreach($idade as $x => $x_valor){
                    echo "Nome :". $x . ", Idade: ". $x_valor . ".";
                    echo "<br>";
                }  echo"<br><br><br><br>";

 //foreach
        $idade= array("Carlos"=>"27", "João"=>"33", "Paulo"=>"14", "Paulinho"=>"5", "Max"=>"8");
        print_r($idade);  echo"<br><br>";
     
 
 //unset
 $v = array(1=>"A",2=>"B",3=>"C",4=>"D");
 $v[] = "E";
 unset($v[5]);
 print_r($v);


  ?>
  </pre>
</div>
</body>
</html>