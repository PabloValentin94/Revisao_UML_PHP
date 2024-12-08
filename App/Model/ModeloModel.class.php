<?php

    namespace App\Model;

    class ModeloModel extends Model
    {

        private $id, $descricao;

        public function __construct(int $id = 0, string $descricao = "")
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->descricao = $descricao;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_Descricao() : string { return $this->descricao; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Descricao(string $parametro) : void { $this->descricao = $parametro; }

    }

?>