<!doctype html>
<html lang="pt-br">
    <head> 
           <meta charset="utf-8">
        <title>Curso de HTML e CSS </title>
    </head>  
    <body>
      <div>
        <?php 
        function soma ($a, $b){
            $s = $a + $b;
        echo "<p>A soma vale $s</p>";
        }
        soma(5, 6);
        soma(9, 17);
        $x = 9;
        $y = 15;
        soma($x, $y);
        ?>
      </div>  
    </body>

</html>
