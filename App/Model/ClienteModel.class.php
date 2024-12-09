<?php

    namespace App\Model;

    use App\DAO\
    {

        ClienteDAO,
        ClienteTelefoneAssocDAO,
        TelefoneDAO
        
    };

    use App\Model\AparelhoModel;

    class ClienteModel extends PessoaModel
    {

        private $id, $nome, $cpf, $ativo;

        private $aparelhos;

        public function __construct(int $id = 0, string $nome = "", string $cpf = "", int $ativo = 1)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->cpf = $cpf;

                $this->ativo = $ativo;

                parent::__construct($nome);

            }

            else
            {

                foreach((new ClienteTelefoneAssocDAO())->Select($this->id) as $telefone)
                {

                    $this->SET_Telefones((new TelefoneDAO())->Search($telefone->GET_FK_Telefone()));

                }

                parent::__construct($this->nome);

            }
            
        }

        public function Save() : void
        {

            $dao = new ClienteDAO();

            ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Add(int $id) : void
        {

            (new ClienteDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new ClienteDAO())->Deactive($id);

        }

        public function List(?int $id = null)
        {

            $dao = new ClienteDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            if($id !== null && $this->data === false)
            {

                $this->data = new ClienteModel();

            }

        }

        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_CPF() : string { return $this->cpf; }

        public function GET_Ativo() : int { return $this->ativo; }

        public function GET_Aparelhos() : array { return $this->aparelhos; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_CPF(string $parametro) : void { $this->cpf = $parametro; }

        public function SET_Ativo(int $parametro) : void { $this->ativo = $parametro; }

        public function SET_Aparelhos(AparelhoModel $parametro) : void { $this->aparelhos[] = $parametro; }

    }

?>