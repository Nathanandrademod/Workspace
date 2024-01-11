<?php 
$a = isset($_GET["ano"])?$_GET["ano"]:"erro";
$i = date("Y")  - $a ;
echo "voce nasceu em $a e tera $i anos<br/><br/><br/>";
if($i < 16) {
    $tipoVoto = "não vota";
}
else {
    if (($i >= 16 && $i < 18) || ($i>65)) {
        $tipoVoto = "voto opcional";
    }
    else {
        $tipoVoto = "voto obrigatorio";
    }
}
echo "<br/>Com essa idade o seu tipo de voto será $tipoVoto";
?>




<?php

/*OOOOU FAÇA ASSIM COM O "ELSEIF" :

<?php 
$a = isset($_GET["ano"])?$_GET["ano"]:"erro";
$i = date("Y")  - $a ;
echo "voce nasceu em $a e tera $i anos<br/><br/><br/>";
if($i < 16) {
    $tipoVoto = "não vota";
}
elseif (($i >= 16 && $i < 18) || ($i>65)) {
        $tipoVoto = "voto opcional";
    }
    else {
        $tipoVoto = "voto obrigatorio";
    }

echo "<br/>Com essa idade o seu tipo de voto será $tipoVoto";
?>

*/


?>

