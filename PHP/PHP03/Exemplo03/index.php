<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
    <?php
    function teste($x) {
        $x += 2;
        echo "<p>o valor de X é $x</p>";
    
    }
    $a = 4;
    teste($a);
    echo"<p>O valor de A é $a</p>";
    ?>
</div>
</body>
</html>