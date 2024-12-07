<?php

    abstract class Controller
    {

        public static function Render(string $view, mixed $model = null) : void
        {

            $file = VIEWS . $view . ".php";

            if(file_exists($file))
            {
    
                require $file;
                
            }
    
            else
            {
    
                exit("Página não encontrada! Caminho do arquivo especificado: $file.");
    
            }

        }

        public static function Alert(string $message, string $header = "/") : void
        {

            $header = ROOT . $header;

            exit("<script> alert('$message'); " .
                 "history.pushState(null, null, '$header'); " .
                 "window.location.reload(true); </script>");

        }

    }

?>