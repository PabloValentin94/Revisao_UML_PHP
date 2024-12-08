<?php

    namespace App\Model;

    class AparelhoModel extends Model
    {

        private $id, $descricao, $ativo;

        public function __construct(int $id = 0, string $descricao = "", int $ativo = 1)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->descricao = $descricao;

                $this->ativo = $ativo;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_Descricao() : string { return $this->descricao; }

        public function GET_Ativo() : int { return $this->ativo; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Descricao(string $parametro) : void { $this->descricao = $parametro; }

        public function SET_Ativo(int $parametro) : void { $this->ativo = $parametro; }

    }

?>