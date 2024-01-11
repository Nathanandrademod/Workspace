<?php
 $carros = array (
	'vw'        => "Fusca",
	0           => "Passat",
	'chevrolet' => "Monza",
	1           => "Chevette",
	'fiat'      => "Tempra",
	2           => "Uno"
	
 );
 print_r($carros);
 //A impressão desse array gera a seguinte saída
 /*
 Array
 (
	[vw] => Fusca
	[0] => Passat
	[chevrolet] => Monza
	[1] => Chevette
	[fiat] => Tempra
	[2] => Uno
 )

A função “print_r” imprime os elementos de um array.

A função “count” retorna o tamanho (quantidade de elementos) de um array.
Essa função, inclusive, é muito útil quando trabalhamos com vetores.

A função “unset” recebe como parâmetro o array e índice ou índices que desejamos remover. Além disso,
é possível também remover o vetor inteiro, passando-o como parâmetro e sem definir nenhum índice.

A função “array_splice” recebe como parâmetros o array a ser manipulado,
o offset (índice a partir do qual desejamos excluir elementos) e o length (quantidade de itens que queremos excluir). */