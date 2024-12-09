<?php

    namespace App\Model;

    class AparelhoModel extends Model
    {

        private $id, $descricao, $ativo, $fk_cliente, $fk_modelo;

        private $cliente, $modelo;

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

        public function GET_FK_Cliente() : int { return $this->fk_cliente; }

        public function GET_FK_Modelo() : int { return $this->fk_modelo; }

        public function GET_Cliente() : ClienteModel { return $this->cliente; }

        public function GET_Modelo() : ModeloModel { return $this->modelo; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Descricao(string $parametro) : void { $this->descricao = $parametro; }

        public function SET_Ativo(int $parametro) : void { $this->ativo = $parametro; }

        public function SET_FK_Cliente(int $parametro) : void { $this->fk_cliente = $parametro; }

        public function SET_FK_Modelo(int $parametro) : void { $this->fk_modelo = $parametro; }

        public function SET_Cliente(ClienteModel $parametro) : void { $this->cliente = $parametro; }

        public function SET_Modelo(ModeloModel $parametro) : void { $this->modelo = $parametro; }

    }

?>