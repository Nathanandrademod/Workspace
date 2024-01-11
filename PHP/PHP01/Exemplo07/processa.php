<?php
    $valor = $_GET["v"];
    echo "Digitou $valor";
    $Raizquadrada = $_GET["Raizquadrada"];
    $rq = sqrt($Raizquadrada);
    echo "<br/> O valor enviado foi $Raizquadrada";
    echo "<br/> A raiz quadrada de $Raizquadrada é = ". number_format($rq,2);
?>
<br>    
 <a href="index.php"> Voltar a pagina inicial</a>