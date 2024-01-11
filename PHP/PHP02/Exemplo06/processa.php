<?php 
$a = isset($_GET["nota"])?$_GET["nota"]:"erro";
$i = isset($_GET["nota2"])?$_GET["nota2"]:"erro";
$r = ($a+$i)/2;
echo "A média entre $a e $i é igual a $r<br/><br/>";
if($r >= 7)
{
    $notaaluno = "APROVADO";
} 
elseif (($r >= 5 && $r < 7)){
    $notaaluno = "RECUPERAÇÃO";
}
else {
    $notaaluno = "REPROVADO";
}
echo "<br/>A situação do aluno será: $notaaluno";
?>




