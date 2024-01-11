<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
    <?php
        function soma(...$p){
            $t = func_num_args();
            $s = 0;
            for($i = 0; $i<$t; $i++){
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma(3, 5, 8, 2, 9, 4);
        echo "a soma vale $r";
    ?>
</div>
</body>
</html>