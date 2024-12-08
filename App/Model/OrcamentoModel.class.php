<?php

    namespace App\Model;

    class OrcamentoModel extends Model
    {

        private $data_orcamento, $preco, $data_validade;

        public function __construct(string $data_orcamento = "", float $preco = 0.00, string $data_validade = "")
        {

            if(empty($this->id))
            {

                $this->data_orcamento = $data_orcamento;

                $this->preco = $preco;

                $this->data_validade = $data_validade;

            }
            
        }

    }

?>