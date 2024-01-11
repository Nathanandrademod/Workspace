<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="conteiner">
    <h1>Alunos</h1>
    <p><a href="index.php" class="btn btn-primary">Novo Aluno</a></p>
    <table class="table">
        <tr class="table-dark"><td>Matricula</td>
        <td>Nome</td><td>Entrada</td></tr>
        
        <?php 
require_once 'inclusao.php';
require_once 'consulta.php';

if(isset($_POST["matricula"])){
    $mensagem = incluir($_POST["matricula"],$_POST["nome"],$_POST["entrada"]);
                echo ("<hr/>".$mensagem."<hr/>");
}
$alunos = obterAlunos();
?>
    <?php
    foreach ($alunos as $obj) {
        echo "<tr><td/>$obj->matricula</td>";
        echo "<td/>$obj->nome</td>";
        echo "<td/>$obj->entrada</td></tr>";  
    }
    ?>


</body>
</html>
