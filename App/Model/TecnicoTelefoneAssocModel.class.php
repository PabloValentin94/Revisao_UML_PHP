<?php

    namespace App\Model;

    class TecnicoTelefoneAssocModel extends Model
    {

        private $id, $fk_tecnico, $fk_telefone;

        public function __construct(int $id = 0, int $fk_tecnico = 0, int $fk_telefone = 0)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->fk_tecnico = $fk_tecnico;

                $this->fk_telefone = $fk_telefone;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_FK_Tecnico() : int { return $this->fk_tecnico; }

        public function GET_FK_Telefone() : int { return $this->fk_telefone; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_FK_Tecnico(int $parametro) : void { $this->fk_tecnico = $parametro; }

        public function SET_FK_Telefone(int $parametro) : void { $this->fk_telefone = $parametro; }

    }

?>