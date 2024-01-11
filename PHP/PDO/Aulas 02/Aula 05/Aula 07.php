<?php
/*
Teoria na prática
A melhor forma de fixar conteúdos quando se aprende uma linguagem de programação é praticando os conceitos estudados. Por isso, no código do emulador anterior, faça o seguinte:

1) Crie mais um array dentro do array $frutas, para armazenar outro tipo de fruta:

Frutas tropicais: goiaba, maracujá, banana e manga.

2) Altere o código para que o array seja impresso na tela (campo CONSOLE do emulador).

3) Execute novamente o código e compare o que será impresso no campo CONSOLE do emulador com o conteúdo do botão ”Mostrar solução” abaixo.
*/

    $frutas = array (
		"vermelhas" => array( 
		    "melancia", 
		    "cereja", 
		    "framboesa",
		    "morango"
		 ),    
 		
		"citricas" => array(
		    "laranja", 
		    "limao",
		    "abacaxi",
		    "mexerica"
		 ),
		 "tropicais" => array(
		     "goiaba",
		     "maracujá",
		     "banana",
		     "manga")
    );
    print_r($frutas);