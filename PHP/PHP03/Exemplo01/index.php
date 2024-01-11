<!doctype html>
<html lang="pt-br">
    <head> 
           <meta charset="utf-8">
        <title>Curso de HTML e CSS </title>
    </head>  
    <body>
      <div>
        <?php 
        function soma() {
        $p = func_get_args();
        $t = func_num_args();
        $s = 0;
        for ($i=0; $i<$t; $i++)
        {$s += $p[$i];
          
        }
        return $s;
    
}

$r = soma (3,6,2,5,6);
echo "a soma dos valores é $r";
?>
</div>  
</body> 
</html>
