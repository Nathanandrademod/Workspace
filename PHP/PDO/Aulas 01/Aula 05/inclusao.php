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