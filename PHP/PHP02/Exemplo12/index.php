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
        return $s;
        }
        $x = 9;
        $y = 15;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r"
        ?>
      </div>  
    </body>

</html>
