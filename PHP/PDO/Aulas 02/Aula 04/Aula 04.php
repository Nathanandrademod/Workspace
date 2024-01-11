<?php
//Foreach

 $carros = Array("Fusca", "Monza", "Passat");

 foreach($carros as $carro){
	echo $carro;
	echo "\n";
 }

 for ($i = 0; $i < count($carros); $i++) {
	echo $carros[$i];
	echo "\n";
 }


 /*Para fins de comparação e demonstração da diferença entre ambos,
em nosso exemplo a mesma operação
 – imprimir os nomes dos carros
 – foi realizada tanto com o laço foreach quanto com o laço for.