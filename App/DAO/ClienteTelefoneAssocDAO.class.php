<?php

    namespace App\DAO;

    use App\Model\ClienteTelefoneAssocModel;

    class ClienteTelefoneAssocDAO extends DAO
    {

        public function __construct()
        {

            parent::__construct();
            
        }

        public function Insert(ClienteTelefoneAssocModel $model) : void
        {

            $sql = "INSERT INTO Cliente_Telefone_Assoc(fk_cliente, fk_telefone) VALUES(?, ?)";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $model->GET_FK_Cliente());

            $stmt->bindValue(2, $model->GET_FK_Telefone());

            $stmt->execute();

        }

        public function Delete(int $id) : void
        {

            $sql = "DELETE FROM Cliente_Telefone_Assoc WHERE id = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public function Select(int $fk_cliente) : array
        {

            $sql = "SELECT * FROM Cliente_Telefone_Assoc WHERE fk_cliente = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $fk_cliente);

            $stmt->execute();

            return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\ClienteTelefoneAssocModel");

        }

        public function Search(int $fk_cliente, int $fk_telefone) : object | false
        {

            $sql = "SELECT * FROM Cliente_Telefone_Assoc WHERE fk_cliente = ? AND fk_telefone = ?";

            $stmt = $this->connection->prepare($sql);

            $stmt->bindValue(1, $fk_cliente);

            $stmt->bindValue(2, $fk_telefone);

            $stmt->execute();

            return $stmt->fetchObject("App\Model\ClienteTelefoneAssocModel");

        }

    }

?>