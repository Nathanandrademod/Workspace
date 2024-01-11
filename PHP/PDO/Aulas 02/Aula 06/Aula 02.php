<?php
 $num1 = 10;
 $num2 = 15;

 $num3 = soma($num1,$num2);
 imprimir_resultado($num3);


 function soma($numero1, $numero2)
 {
	return $numero1 + $numero2;
 }
 function imprimir_resultado($numero)
 {
	echo "O resultado da operação é igual a: " . $numero;
 }