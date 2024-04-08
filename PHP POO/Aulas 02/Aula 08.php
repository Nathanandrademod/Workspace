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

    echo "Menssagem: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";

}

?>