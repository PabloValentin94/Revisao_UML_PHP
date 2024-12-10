<?php

    namespace App\DAO;

    use App\Model\OrcamentoModel;

    class OrcamentoDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(OrcamentoModel $model) : void
        {

            $sql = "INSERT INTO Orcamento(data_orcamento, preco, data_validade, fk_tecnico, fk_aparelho) VALUES(?, ?, ?, ?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_Data_Orcamento());

            $stmt->bindValue(2, $model->GET_Preco());

            $stmt->bindValue(3, $model->GET_Data_Validade());

            $stmt->bindValue(4, $model->GET_FK_Tecnico());

            $stmt->bindValue(5, $model->GET_FK_Aparelho());

            $stmt->execute();

        }

        public function Delete(int $id) : void
        {

            $sql = "DELETE FROM Orcamento WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();
            
        }

        public function Select() : array
        {

            $sql = "SELECT * FROM Orcamento ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\OrcamentoModel");

        }

        public function Search(int $id) : object | false
        {

            $sql = "SELECT * FROM Orcamento WHERE id = ? ORDER BY id ASC";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\OrcamentoModel");

        }

    }

?>