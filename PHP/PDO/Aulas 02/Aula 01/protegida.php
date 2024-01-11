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
    session_start();
    if(!isset($_SESSION["usuario"]))
    header("Location: form_login.php",true,301);
    else {
        ?>
        <html><body>
            <h1>Olá <?php echo($_SESSION["usuario"]) ?> </h1>
            <h2> <a href="index.php">retornar</a></h2>
        </body></html>
 <?php
    }
?>    
</body>
</html>