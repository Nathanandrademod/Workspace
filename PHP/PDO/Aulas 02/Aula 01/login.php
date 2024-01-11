<?php
session_start();
$erro="";
if(!isset($_POST["login"])or($_POST["login"] == ""))
    $erro = "PREENCHA O LOGIN";
    elseif(
        !isset($_POST["senha"])or($_POST["senha"] == ""))
        $erro = "PREENCHA A SENHA";
     else{
        $login=$_POST["login"];
        $senha=$_POST["senha"];
        if ($login!="admin" && $senha!="1234"){
            $erro = "LOGIN OU SENHA INVALIDO(S)";
        } else {
            $_SESSION["usuario"] = "Administrador";
        }
     }
     if ($erro!="")
     header("Location: form_login.php?erro=$erro",
            true,301);
            else
            header("Location: protegida.php",
                true,301);