<?php 
$d = isset($_GET["comida"])?$_GET["comida"]:1;
switch ($d) {
    case 1:
        echo "Sorvete <br/>chocolate<br/>";
        break;
        case 2:
            echo "coxinha";
            break;
}
 
?>





