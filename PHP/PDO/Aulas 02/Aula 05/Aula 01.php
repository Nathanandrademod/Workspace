<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Numero: <input type="number" name="num" />
        <input type="submit" value="add" name="oper" />
        <input type="submit" value="del" name="oper" />
        <input type="submit" value="sort" name="oper" />
        <input type="submit" value="clear" name="oper" />
    </form>

    <ul>
    <?php 
    session_start();
    if(isset($_SESSION["valores"]))
    $valores = $_SESSION["valores"];
    else 
     $valores = array();
     ?>

<?php 

if(isset($_POST["num"])) {
    switch($_POST["oper"]) {
        case "add":
            $valores[] = $_POST["num"];
            break;
            
        case "del":
            $indice = array_search($_POST["num"],$valores);
            if($indice!="") 
                array_splice($valores,$indice,1);
                break;

        case "sort":
                   sort($valores);
                    break;

        case "clear":
                    $valores = array();
                    unset($_SESSION["valores"]);
                    session_destroy();
                    break;
    }
}
if(count($valores)>0)
for($i=0; $i<count($valores); $i++)
echo ("<li>".$valores[$i]."</li>");
$_SESSION["valores"] = $valores;
     ?>
</body>
</html>



