<?php

    namespace App\DAO;

    use App\Model\ModeloModel;

    class ModeloDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(ModeloModel $model) : void
        {

            $sql = "INSERT INTO Modelo(descricao) VALUES(?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Descricao());

            $stmt->execute();

        }

        public function Update(ModeloModel $model) : void
        {

            $sql = "UPDATE Modelo SET descricao = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Descricao());

            $stmt->bindValue(2, $model->GET_ID());

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Modelo SET ativo = 1 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Modelo SET ativo = 0 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Modelo ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\ModeloModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Modelo WHERE id = ? ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\ModeloModel");

        }

    }

?>