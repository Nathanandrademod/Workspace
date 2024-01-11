<!doctype html>
<html lang="pt-br">
    <head>
        <title>Curso de HTML e CSS </title>
    <meta charset="utf-8">
    
     
    </head>  
    <body>
<div>
<?php
    $txt = isset($_GET["t"])?$_GET["t"]:"ERRO Texto Não definido";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"ERRO Tamanho não definido";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"ERRO Cor não definida";

   
    echo "<span class='texto'>$txt</span>";
?>
        <style>
         
         span.texto {
             font-size: <?php echo $tam; ?>;
             color: <?php echo $cor; ?>;
         } 
           </style>
</div>
    </body>

</html>
