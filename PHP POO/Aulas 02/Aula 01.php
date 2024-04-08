<?php
    class Nome{
        const nome = "Nathan ";
       
        /* public function exebirNome(){
            echo self::nome;
        }
        */
    }
    class SobreNome extends Nome{
        const nome = "Andrade Modanesi";

        public function exebirNome() {
            echo parent::nome;
            echo self::nome;

        }
    }
$nome = new sobreNome();
$nome->exebirNome();

    //SELF APENAS NO ESCOPO DA CLASSE, EM QUANTO O PARENT PEGA INFORMÇÃO DO PARENTE DA CLASSE 
    
    //aula : https://www.youtube.com/watch?v=6u-IPyqAOJk&list=PLwXQLZ3FdTVEau55kNj_zLgpXL4JZUg8I&index=9

?>