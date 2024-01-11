<!doctype html>
<html lang="pt-br">
    <head>
        <title>Primeiro exemplo PHP</title>
    <meta charset="utf-8">
    <style>
        h2 {
            color: aqua;
            text-shadow: 1px 1px 1px black;
        }
    </style>
    </head>  
    <body>
        <p>Este aqui é o conteudo da pagina HTML</p>

        <h1>Testando PHP</h1>
        <?php 
    echo "<h2>Ola, Mundo :)</h2>";
    
        $nome = "Ana"; 
        $idade = 18;
        echo $nome. " tem ". $idade. " anos ! ";
/* OOOOU FAÇA ASSIM */

    $nome = "Gustavo";
    $idade = 28;
    echo "<br/> <br/><br/>$nome tem $idade anos !";


        ?> 

    
    </body>

</html>