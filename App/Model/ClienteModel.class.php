<?php

    namespace App\Model;

    class ClienteModel extends Model
    {

        private $id, $cpf;

        public function __construct(int $id = 0, string $cpf = "")
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->cpf = $cpf;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_CPF() : string { return $this->cpf; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_CPF(string $parametro) : void { $this->cpf = $parametro; }

    }

?>