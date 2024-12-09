<?php

    namespace App\DAO;

    use App\Model\ClienteModel;

    class ClienteDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(ClienteModel $model) : void
        {

            $sql = "INSERT INTO Cliente(nome, cpf) VALUES(?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Nome());

            $stmt->bindValue(2, $model->GET_CPF());

            $stmt->execute();

        }

        public function Update(ClienteModel $model) : void
        {

            $sql = "UPDATE Cliente SET nome = ?, cpf = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Nome());

            $stmt->bindValue(2, $model->GET_CPF());

            $stmt->bindValue(3, $model->GET_ID());

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Cliente SET ativo = 1 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Cliente SET ativo = 0 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Cliente ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\ClienteModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Cliente WHERE id = ? ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\ClienteModel");

        }

    }

?>