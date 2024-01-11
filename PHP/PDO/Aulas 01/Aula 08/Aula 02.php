<?php
/*a variável $dsn, abaixo, corresponde à instação da classe PDO, inicializada na conexão com o BD*/
$qtdeLinhasAfetadas = $dsn->exec("Delete From Cliente Where codigo_cliente = 1");
echo "Quantidade de linhas afetadas: " . $qtdeLinhasAfetadas;
?>


<?php
$instrucaoSQL = "Select nome, cpf, telefone From Cliente";
//a variável $dsn, abaixo, corresponde à instação da classe PDO, inicializada na conexão com o BD
$resultSet = $dsn->query($sql);
while ($row = $resultSet->fetch()) {
  echo $row['nome'] . "\t";
  echo $row['cpf'] . "\t";
  echo $row['telefone'] . "\n";
}
?>

<?php
//...
while ($row = $resultSet->fetch(PDO::FETCH_ASSOC)) {
  //...
}
?>


O Ataque SQL injection
SQL injection
O SQL Injection, ou Injeção de SQL,
é um tipo de ataque baseado na manipulação e alteração de instruções SQL.
Tal ataque é possível devido a vulnerabilidades encontradas em aplicações 
e sistemas que aceitam dados de entrada sem fazer o devido tratamento,
além de executarem a conexão e as instruções SQL utilizando usuários com privilégios altos.

Vejamos um exemplo prático, normalmente,
utilizado em formulários de login, onde poderia ser aplicada uma injeção de SQL:


    NÃO FAÇA O EXEMPLO ABAIXO

<?php
//...
//Realizando uma consulta no BD através do login e senha recebidos por POST
$login = $_POST['login'];
$pswd = $_POST['pswd'];
$instrucaoSQL = "Select * From Usuario Where login = '$login' And password = '$pswd'";
$result = mysql_query( $instrucaoSQL ) or die(' Ocorreu um erro na execução da instrução: ' . $instrucaoSQL . ' ' .
mysql_error() );
?>

<?php
//...
//Realizando uma consulta no BD através do login e senha recebidos por POST
$login = $_POST['login'];
$pswd = $_POST['pswd'];
$instrucaoSQL = "Select * From Usuario Where login = '' OR true = true;/* And password = '*/--'";
//...
?>

Veja que, no lugar dos valores esperados – login e senha –,
seriam recebidos comandos que modificariam o sentido original da instrução SQL,
no código PHP, permitindo assim o acesso ao sistema em questão.

Métodos Prepare e Execute
Para resolver os problemas acima, de SQL Injection,
poderíamos escrever alguns códigos em PHP. Em linhas gerais,
esses códigos conteriam instruções para tratar os dados recebidos antes de utilizá-los em instruções SQL.
 Esse trabalho poderia ser maçante, já que precisaria prever e tratar diversas formas de códigos maliciosos.
 Para facilitar e resolver tais questões, a Classe PDO possui um método chamado Prepare. continua na aula 03