<?php

    namespace App\Model;

    use App\DAO\
    {

        OrcamentoDAO,
        TecnicoDAO,
        AparelhoDAO

    };

    class OrcamentoModel extends Model
    {

        private $id, $data_orcamento, $preco, $data_validade, $fk_tecnico, $fk_aparelho;

        private $tecnico, $aparelho;

        public function __construct(int $id = 0, string $data_orcamento = "", float $preco = 0.00, string $data_validade = "", int $fk_tecnico = 0, int $fk_aparelho = 0)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->data_orcamento = $data_orcamento;

                $this->preco = $preco;

                $this->data_validade = $data_validade;

                $this->fk_tecnico = $fk_tecnico;

                $this->fk_aparelho = $fk_aparelho;

            }

            else
            {

                $this->tecnico = (new TecnicoDAO())->Search($this->fk_tecnico);

                $this->aparelho = (new AparelhoDAO())->Search($this->fk_aparelho);

            }
            
        }

        public function Save() : void
        {

            (new OrcamentoDAO())->Insert($this);

        }

        public function Erase(int $id) : void
        {

            (new OrcamentoDAO())->Delete($id);

        }

        public function List(?int $id = null)
        {

            $dao = new OrcamentoDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            if($id !== null && $this->data === false)
            {

                $this->data = new ModeloModel();

            }

        }

        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_Data_Orcamento() : string { return $this->data_orcamento; }

        public function GET_Preco() : float { return $this->preco; }

        public function GET_Data_Validade() : string { return $this->data_validade; }

        public function GET_FK_Tecnico() : int { return $this->fk_tecnico; }

        public function GET_FK_Aparelho() : int { return $this->fk_aparelho; }

        public function GET_Tecnico() : TecnicoModel { return $this->tecnico; }

        public function GET_Aparelho() : AparelhoModel { return $this->aparelho; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Data_Orcamento(string $parametro) : void { $this->data_orcamento = $parametro; }

        public function SET_Preco(float $parametro) : void { $this->preco = $parametro; }

        public function SET_Data_Validade(string $parametro) : void { $this->data_validade = $parametro; }

        public function SET_FK_Tecnico(int $parametro) : void { $this->fk_tecnico = $parametro; }

        public function SET_FK_Aparelho(int $parametro) : void { $this->fk_aparelho = $parametro; }

        public function SET_Tecnico(TecnicoModel $parametro) : void { $this->tecnico = $parametro; }

        public function SET_Aparelho(AparelhoModel $parametro) : void { $this->aparelho = $parametro; }

    }

?>