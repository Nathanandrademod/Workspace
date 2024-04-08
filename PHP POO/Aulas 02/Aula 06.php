<?php

try {
    throw new Exception("Alguma mensagem de erro.<br>");
} catch(Exception $e) {
    echo $e->getMessage();
}




try {
    throw new Exception("<br>outra mensagem de erro.");
} catch(Exception $erro) {
    echo $erro->getMessage();
}



?>