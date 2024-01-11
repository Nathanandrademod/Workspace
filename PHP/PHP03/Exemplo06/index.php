<!DOCTYPE html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<div>
<?php
$prod="leite";
$preco=4.5;
printf("O %s está custando R$ %.2f <br><br>",$prod,$preco);

echo "<br><h2>Exemplo de vetor 1</h2>";
$vetor[0] = 4;
$vetor[1] = 8;
$vetor[2] = 3;
print_r($vetor);

echo "<br><br><h2>Exemplo de vetor 2</h2>";
$vetor2 = array (3,7,6,2,1,9);
print_r($vetor2)
    ?>
</div>
</body>
</html>