<!doctype html>
<html lang="pt-br">
    <head>
        <title>Curso de HTML e CSS </title>
    <meta charset="utf-8">
        <style>
            em {
                color:blueviolet
            }

            fieldset {
                border: 2px brown solid;
                border-radius: 10px;
                width: 40%;

            }


        </style>
    </head>  
    <body>
    <p><strong>Elementos Fieldset e Legend em Formulários</strong></p>
    <form name="Cadastro" method="POST" action="processa.php">
      <fieldset>
        <legend>titulo</legend>
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome">
      <br>
      <label for="sobrenome">Sobrenome</label>
      <input type="text" id="sobrenome" name="snome" >
      <br>
      <label for="masc">Masculino</label>
      <input type="radio" id="masc" name="sexo" >
      <br>
      <label for="fem">Feminino</label>
      <input type="radio" id="fem" name="sexo" >
      <br>
      <input type="radio" name="sexo" id="masc"/>
      <label for="email">Email <em>*</em></label>
      <input type="email" name="email" id="email" required> <br>
      
      <label for="pass">Password <em>*</em>:</label>
      <input type="password" id="pass" name="password"
       minlength="8" required>
      <br>
      <label for="data">Data de Nacimento:</label>
       <input type="date" id="data" name="dataNasc">
      <br>
      
      

      </fieldset>

    
      <br>
      <input type="submit" value="Enviar" />

    </body>

</html>