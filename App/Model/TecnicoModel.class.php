<?php

    namespace App\Model;

    class TecnicoModel extends Model
    {

        private $id, $especialidade;

        public function __construct(int $id = 0, string $especialidade = "")
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->especialidade = $especialidade;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_Especialidade() : string { return $this->especialidade; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Especialidade(string $parametro) : void { $this->especialidade = $parametro; }

    }

?>