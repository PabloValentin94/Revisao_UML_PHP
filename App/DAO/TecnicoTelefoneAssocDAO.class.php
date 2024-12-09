<?php

    namespace App\DAO;

    use App\Model\TecnicoTelefoneAssocModel;

    class TecnicoTelefoneAssocDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(TecnicoTelefoneAssocModel $model) : void
        {

            $sql = "INSERT INTO Cliente_Telefone_Assoc(fk_tecnico, fk_telefone) VALUES(?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_FK_Tecnico());

            $stmt->bindValue(2, $model->GET_FK_Telefone());

            $stmt->execute();

        }

        public function Delete(int $id) : void
        {

            $sql = "DELETE FROM Tecnico_Telefone_Assoc WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select(int $fk_tecnico) : array
        {

            $sql = "SELECT * FROM Tecnico_Telefone_Assoc WHERE fk_tecnico = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $fk_tecnico);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\TecnicoTelefoneAssocModel");

        }

        public function Search(int $fk_tecnico, int $fk_telefone) : object | false
        {

            $sql = "SELECT * FROM Tecnico_Telefone_Assoc WHERE fk_tecnico = ? AND fk_telefone = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $fk_tecnico);

            $stmt->bindValue(2, $fk_telefone);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\TecnicoTelefoneAssocModel");

        }

    }

?>