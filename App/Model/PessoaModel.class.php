<?php

    namespace App\Model;

    abstract class PessoaModel extends Model
    {

        private $id, $nome;

        public function __construct(int $id = 0, string $nome = "")
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->nome = $nome;

            }
            
        }



        // GET e SET.

        protected function GET_ID() : int { return $this->id; }

        protected function GET_Nome() : string { return $this->nome; }

        protected function SET_ID(int $parametro) : void { $this->id = $parametro; }

        protected function SET_Nome(string $parametro) : void { $this->nome = $parametro; }

    }

?>