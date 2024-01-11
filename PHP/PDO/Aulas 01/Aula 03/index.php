<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

//Constantes para armazenamento das variáveis de conexão.
define('HOST', '127.0.0.1');
define('DBNAME', 'test');
define('USER', 'postgres');
define('PASSWORD', 'nat12han');

//Conectando com o Banco de dados
$stringConn = "host=".HOST." dbname=".DBNAME." user=".USER." password=".PASSWORD;
$conn = pg_connect($stringConn) or die( ' Ocorreu um erro e não foi possível conectar ao banco de dados.' );

//Realizando uma consulta no BD
$instrucaoSQL = 'SELECT cpf, nome, telefone FROM public."Cliente"';
$result = pg_query( $conn, $instrucaoSQL ) or die(' Ocorreu um erro na execução da instrução: ' . $instrucaoSQL );

//pg_query($dbcon, "SELECT id, nome FROM clientes");

//Imprimindo os dados da consulta
while ($row = pg_fetch_array( $result )){
	echo $row['nome'] . "<br>";
	echo $row['cpf'] . "<br>";
	echo $row['telefone'] . "\n";
}

//Encerrando a conexão
pg_close($conn);
?>
</body>

</html>