<?php

class Newsletter {
    public function cadastraEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        throw new Exception("Este email é inválido", 1);
        else:
        echo "Email cadastrado com sucesso!";
    endif;

    }
}

$newsletter = new Newsletter();

try {
$newsletter->cadastraEmail("contato@gmail");
} catch(Exception $e) {
    echo $e->getMessage();
}

?>


