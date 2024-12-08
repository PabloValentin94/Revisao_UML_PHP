<?php

    namespace App\DAO;

    use App\Model\TelefoneModel;

    class TelefoneDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(TelefoneModel $model) : void
        {

            $sql = "INSERT INTO Telefone(ddd, numero) VALUES(?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_DDD());

            $stmt->bindValue(2, $model->GET_Numero());

            $stmt->execute();

        }

        public function Update(TelefoneModel $model) : void
        {

            $sql = "UPDATE Telefone SET ddd = ?, numero = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_DDD());

            $stmt->bindValue(2, $model->GET_Numero());

            $stmt->bindValue(3, $model->GET_ID());

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Telefone SET ativo = 1 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Telefone SET ativo = 0 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Telefone ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\TelefoneModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Telefone ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\TelefoneModel");

        }

    }

?>