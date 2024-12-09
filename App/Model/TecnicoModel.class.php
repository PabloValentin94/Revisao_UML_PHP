<?php

    namespace App\Model;

    use App\DAO\
    {

        TecnicoDAO,
        TecnicoTelefoneAssocDAO,
        TelefoneDAO
        
    };

    class TecnicoModel extends PessoaModel
    {

        private $id, $nome, $especialidade, $ativo;

        public function __construct(int $id = 0, string $nome = "", string $especialidade = "", int $ativo = 1)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->especialidade = $especialidade;

                $this->ativo = $ativo;

                parent::__construct($nome);

            }

            else
            {

                foreach((new TecnicoTelefoneAssocDAO())->Select($this->id) as $telefone)
                {

                    $this->SET_Telefones((new TelefoneDAO())->Search($telefone->GET_FK_Telefone()));

                }

                parent::__construct($this->nome);

            }
            
        }

        public function Save() : void
        {

            $dao = new TecnicoDAO();

            ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Add(int $id) : void
        {

            (new TecnicoDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new TecnicoDAO())->Deactive($id);

        }

        public function List(?int $id = null)
        {

            $dao = new TecnicoDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            if($id !== null && $this->data === false)
            {

                $this->data = new TecnicoModel();

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