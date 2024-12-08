<?php

    namespace App\Model;

    class ClienteTelefoneAssocModel extends Model
    {

        private $id, $fk_cliente, $fk_telefone;

        public function __construct(int $id = 0, int $fk_cliente = 0, int $fk_telefone = 0)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->fk_cliente = $fk_cliente;

                $this->fk_telefone = $fk_telefone;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_FK_Cliente() : int { return $this->fk_cliente; }

        public function GET_FK_Telefone() : int { return $this->fk_telefone; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_FK_Cliente(int $parametro) : void { $this->fk_cliente = $parametro; }

        public function SET_FK_Telefone(int $parametro) : void { $this->fk_telefone = $parametro; }

    }

?>