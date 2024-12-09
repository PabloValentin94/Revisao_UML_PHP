<?php

    namespace App\DAO;

    use App\Model\AparelhoModel;

    class AparelhoDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(AparelhoModel $model) : void
        {

            $sql = "INSERT INTO Aparelho(descricao) VALUES(?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Descricao());

            $stmt->execute();

        }

        public function Update(AparelhoModel $model) : void
        {

            $sql = "UPDATE Aparelho SET descricao = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Descricao());

            $stmt->bindValue(2, $model->GET_ID());

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Aparelho SET ativo = 1 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Aparelho SET ativo = 0 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Aparelho ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\AparelhoModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Aparelho WHERE id = ? ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\AparelhoModel");

        }

    }

?>