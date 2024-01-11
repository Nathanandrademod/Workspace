<?php 
//exemplo de criptografia de senha

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        #corpo {
            margin-top: 10%;

        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <script type="application/javascript">
        function conferirSenha() {
            const senha = document.querySelector("input[name=senha]");
            const confirma = document.querySelector("input[name=confirmar]");
            if (confirma.value === senha.value) {
                confirma.setCustomValidity('');
            } else {
                confirma.setCustomValidity('As senhas não conferem')
            }

        }
    </script>

</head>

<body class="container">
    <nav class="navbar navbar-expand-sm  cx-box2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://img.freepik.com/icones-gratis/homem-negro-simbolo-usuario_318-60703.jpg"
                    alt="Avatar Logo" style="width:40px;" class="rounded-pill"> Seja Bem vindo(a).
 <a class="login" href="login.html">Login</a>
            </a>
            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item cx-box">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item cx-box">
                        <a class="nav-link" href="#">Service</a>
                    </li>
                    <li class="nav-item cx-box">
                        <a class="nav-link" href="#">Contate-nos</a>
                    </li>
                </ul>
            </div>

    </nav>
    <br><br>
    <!-- Layout + Forms -->
    <div class="container col-6 mb-4" id="boxtop">
        <h2 class="h2o">Cadastre-se preenchendo o formulário:</h2><br>
        <form action="php/inclusao.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="col-md-6">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="cep" name="username" placeholder="Nome de usuario"
                    minlength="8">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" minlength="8" id="password"
                    placeholder="Digite sua senha" onchange="conferirSenha()" required><br>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Confirme a senha:</label>
                <input type="password" placeholder="Sua senha" name="confirm_password" class="form-control"
                    id="confirm_password" onchange="conferirSenha()" required>
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary button" name="btnCadUsuario" >Cadastrar</button>
            </div>

    </div>
    </form>
</body>

</html>