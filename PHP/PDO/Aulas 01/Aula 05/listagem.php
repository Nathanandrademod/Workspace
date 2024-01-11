<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <?php
    require_once 'inclusao.php';
    require_once 'consulta.php';

    if (isset($_POST["matricula"])) {
        $mensagem = incluir(
            $_POST["matricula"],
            $_POST["nome"], $_POST["entrada"]
        );
        echo ("<hr/>" . $mensagem . "<hr/>");


    }
    $alunos = obterAlunos();
    ?>
</head>

<body class="container">
    <h1>Alunos</h1>
    <p><a href="novo.html" class="btn btn-primary"> Novo Aluno</a></p>

    <table class="table">
        <tr class="table-dark">
            <td>Matricula</td>
            <td>Nome</td>
            <td>Entrada</td>
        </tr>
        <?php
        foreach ($alunos as $obj) {
            echo "<tr><td>$obj->matricula</td><td";
            echo "<tr><td>$obj->nome</td><td";
            echo "<tr><td>$obj->entrada</td><td<br>";

        }
        ?>
    </table>
</body>

</html>