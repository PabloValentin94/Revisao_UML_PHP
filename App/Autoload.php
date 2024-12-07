<?php

    spl_autoload_register(function(string $class) : void {

        $file = BASEDIR . $class . ".class.php";

        if(file_exists($file))
        {

            require $file;
            
        }

        else
        {

            exit("Classe não encontrada! Caminho do arquivo especificado: $file.");

        }

    });

?>