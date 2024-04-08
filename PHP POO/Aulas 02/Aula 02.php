<?php
    
    class Login {
        public static $user;
        public static function vereficaLogin(){
            echo "o usuário ".self::$user." está logado";
        }
        public function sairSistema(){
            echo "<br>o usuário ".self::$user." deslogou ";
        }

    } 


Login::$user = "admin";
Login::vereficaLogin();


$login = new Login();
$login->sairSistema(); 


        //link aula https://www.youtube.com/watch?v=i-UNzXTu-9w&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=10
?>