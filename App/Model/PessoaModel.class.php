<?php

    namespace App\Model;

    abstract class PessoaModel extends Model
    {

        private $nome;

        public function __construct(string $nome = "")
        {

            $this->nome = $nome;
            
        }

        // GET e SET.

        public function GET_Nome() : string { return $this->nome; }

        public function SET_Nome(string $parametro) : void { $this->nome = $parametro; }

    }

?>