<?php

    namespace App\Model;

    class TelefoneModel extends Model
    {

        private $id, $ddd, $numero, $ativo;

        public function __construct(int $id = 0, int $ddd = 0, string $numero = "", int $ativo = 1)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->ddd = $ddd;

                $this->numero = $numero;

                $this->ativo = $ativo;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_DDD() : int { return $this->ddd; }

        public function GET_Numero() : string { return $this->numero; }

        public function GET_Ativo() : int { return $this->ativo; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_DDD(int $parametro) : void { $this->ddd = $parametro; }

        public function SET_Numero(string $parametro) : void { $this->numero = $parametro; }

        public function SET_Ativo(int $parametro) : void { $this->ativo = $parametro; }

    }

?>