<?php

    namespace App\Model;

    class OrcamentoModel extends Model
    {

        private $id, $data_orcamento, $preco, $data_validade;

        public function __construct(int $id = 0, string $data_orcamento = "", float $preco = 0.00, string $data_validade = "")
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->data_orcamento = $data_orcamento;

                $this->preco = $preco;

                $this->data_validade = $data_validade;

            }
            
        }



        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_Data_Orcamento() : string { return $this->data_orcamento; }

        public function GET_Preco() : float { return $this->preco; }

        public function GET_Data_Validade() : string { return $this->data_validade; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Data_Orcamento(string $parametro) : void { $this->data_orcamento = $parametro; }

        public function SET_Preco(float $parametro) : void { $this->preco = $parametro; }

        public function SET_Data_Validade(string $parametro) : void { $this->data_validade = $parametro; }

    }

?>