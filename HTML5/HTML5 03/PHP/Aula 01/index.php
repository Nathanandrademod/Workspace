<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="estilos.css">
   
   <title>semantic-ui</title>
</head>
<body>
    <?php  
require_once 'config.php';

function obterDados(){
    global $dsn, $user, $pass;
    $LOGIN_CADASTRO = [];
    try {
        $pdo = new PDO ($dsn, $user, $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $sql = "SELECT * FROM LOGIN_CADASTRO";
        $stm = $pdo->prepare($sql);
        $stm->execute();
        $LOGIN_CADASTRO = $stm->fetchAll (PDO::FETCH_OBJ);
    } 
    catch (PDOException $e) {
        $LOGIN_CADASTRO = [];
}   finally {
        if ($pdo) {
           $pdo = null;
    }
}   
        return $LOGIN_CADASTRO;
    }    ?>

        <div class="ui container">
        <h2>Log in</h2>
        <form class="ui form">
            <div class="field">
                <label>Username</label>
                <input type="text" name="Username" placeholder="Username">
            </div>
                        
            <div class="field"> 
                <label>Email</label>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="field"> 
                <label>Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
                <div class="ui checkbox">
                    <input type="checkbox" tabindex="0">
                    <label>Remamber Me</label>
                                
            <div class="submit"> 
                <input type="submit" id="botão" name="submit" placeholder="submit">
            </div>
                </div>
            </div>
        </form>     
    </div>




 </body>         
</html> 