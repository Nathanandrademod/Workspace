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
define('USER', 'root');
define('PASSWORD', '');

//Conectando com o Servidor
$conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die( ' Não foi possível conectar.' );

//Realizando uma consulta no BD
$instrucaoSQL = "Select nome, cpf, telefone From Cliente";
$stmt = mysqli_prepare($conn, $instrucaoSQL);
mysqli_stmt_bind_result($stmt, $nome, $cpf, $tel);
mysqli_stmt_execute($stmt);

while (mysqli_stmt_fetch($stmt)) {
    ?>        <html><body><P>EU SO FODA.COM</P>
    <h3>Olá <?php echo($nome) ?> </h3>
    <h2>Seu cpf :  <?php echo($cpf) ?> </h2>
    <h2>Seu telefone :  <?php echo($tel)  ?> LIGUE AGORA E GANHE JÁ E NÃO.. </h2>
</body></html>
<?php
}
/* teste de baixo
	echo $nome . "\t";
	echo $cpf . "\t";
	echo $tel . "\n";
*/

//Encerrando a conexão
mysqli_close($conn);
?>
</body>
</html>


