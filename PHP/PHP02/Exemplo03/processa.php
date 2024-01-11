<?php 
$a = isset($_GET["ano"])?$_GET["ano"]:"erro";
$i = date("Y")  - $a ;
echo "voce nasceu em $a e tera $i anos<br/><br/><br/>";
if($i >= 18) {
    $v = "Já pode votar !";
    $d = "Já pode dirigir !";
} 
else {
    $v = "Não pode votar !";
    $d = "Não pode dirigir !";
}
echo "Com essa idade você, $v <br/>E tambem, $d : )";
?>