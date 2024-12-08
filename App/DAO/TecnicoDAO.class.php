<?php

    namespace App\DAO;

    use App\Model\TecnicoModel;

    class TecnicoDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(TecnicoModel $model) : void
        {

            $sql = "INSERT INTO Tecnico(nome, especialidade) VALUES(?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Nome());

            $stmt->bindValue(2, $model->GET_Especialidade());

            $stmt->execute();

        }

        public function Update(TecnicoModel $model) : void
        {

            $sql = "UPDATE Tecnico SET nome = ?, especialidade = ? WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Nome());

            $stmt->bindValue(2, $model->GET_Especialidade());

            $stmt->bindValue(3, $model->GET_ID());

            $stmt->execute();

        }

        public function Active(int $id) : void
        {

            $sql = "UPDATE Tecnico SET ativo = 1 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Deactive(int $id) : void
        {

            $sql = "UPDATE Tecnico SET ativo = 0 WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Tecnico ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\TecnicoModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Tecnico ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\TecnicoModel");

        }

    }

?>