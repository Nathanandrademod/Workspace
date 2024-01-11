<?php
$nome = isset($_POST["nome"])?$_POST["nome"]:"[Nome não informado]";
$sexo = $_POST["sexo"];
echo "Nome: $nome Sexo: $sexo";
?>
<br>    
 <a href="index.php"> Voltar a pagina inicial</a>