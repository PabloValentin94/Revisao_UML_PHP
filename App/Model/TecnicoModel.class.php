<?php

    namespace App\Model;

    class TecnicoModel extends PessoaModel
    {

        private $id, $especialidade, $ativo;

        public function __construct(int $id = 0, string $nome = "", string $especialidade = "", int $ativo = 1)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->especialidade = $especialidade;

                $this->ativo = $ativo;

                parent::__construct($nome);

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_Especialidade() : string { return $this->especialidade; }

        public function GET_Ativo() : int { return $this->ativo; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Especialidade(string $parametro) : void { $this->especialidade = $parametro; }

        public function SET_Ativo(int $parametro) : void { $this->ativo = $parametro; }

    }

?>