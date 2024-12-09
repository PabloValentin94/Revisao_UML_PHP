<?php

    namespace App\Model;

    use App\DAO\ModeloDAO;

    class ModeloModel extends Model
    {

        private $id, $descricao, $ativo;

        public function __construct(int $id = 0, string $descricao = "", int $ativo = 1)
        {

            if(empty($this->id))
            {

                $this->id = $id;

                $this->descricao = $descricao;

                $this->ativo = $ativo;

            }
            
        }

        public function Save() : void
        {

            $dao = new ModeloDAO();

            ($this->id === 0) ? $dao->Insert($this) : $dao->Update($this);

        }

        public function Add(int $id) : void
        {

            (new ModeloDAO())->Active($id);

        }

        public function Remove(int $id) : void
        {

            (new ModeloDAO())->Deactive($id);

        }

        public function List(?int $id = null)
        {

            $dao = new ModeloDAO();

            $this->data = ($id === null) ? $dao->Select() : $dao->Search($id);

            if($id !== null && $this->data === false)
            {

                $this->data = new ModeloModel();

            }

        }

        // GET e SET.

        public function GET_ID() : int { return $this->id; }

        public function GET_Descricao() : string { return $this->descricao; }

        public function GET_Ativo() : int { return $this->ativo; }

        public function SET_ID(int $parametro) : void { $this->id = $parametro; }

        public function SET_Descricao(string $parametro) : void { $this->descricao = $parametro; }

        public function SET_Ativo(int $parametro) : void { $this->ativo = $parametro; }

    }

?>